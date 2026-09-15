<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\TestDrive;
use App\Models\CreditSimulation;
use App\Models\WebsiteVisit;
use App\Models\DeliveryMoment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CrmController extends Controller
{
    /**
     * Menampilkan form login CRM dealer BSD.
     */
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin.crm.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Memproses autentikasi sales / dealer management.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.crm.dashboard'))
                ->with('success', 'Otorisasi berhasil. Selamat datang di Dealership CRM Promo Geely BSD.');
        }

        return back()->withErrors([
            'email' => 'Kredensial dealer tidak cocok dengan data aktif Geely BSD.',
        ])->onlyInput('email');
    }

    /**
     * Mengakhiri sesi login CRM dealer.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.crm.login')
            ->with('info', 'Sesi aman CRM Promo Geely BSD berhasil ditutup.');
    }

    /**
     * Executive Cockpit Dashboard View dengan data riil dari database.
     */
    public function dashboard(): View
    {
        $totalLeads = Lead::count();
        $activeTestDrives = TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
        $spkDeals = Lead::where('stage', 'won')->count();
        $pendingCredit = CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();
        $totalCredit = CreditSimulation::count();

        // Hitung rasio konversi closing riil
        $conversionRate = $totalLeads > 0 ? round(($spkDeals / $totalLeads) * 100, 1) : 0;

        // Distribusi Minat Model Kendaraan Riil dari Database
        $modelCounts = [
            'ex5'     => Lead::where('model_interest', 'like', '%EX5%')->count(),
            'ex2'     => Lead::where('model_interest', 'like', '%EX2%')->count(),
            'starray' => Lead::where('model_interest', 'like', '%Starray%')->count(),
        ];

        // Persentase Riil
        $modelPercentages = [
            'ex5'     => $totalLeads > 0 ? round(($modelCounts['ex5'] / $totalLeads) * 100) : 0,
            'ex2'     => $totalLeads > 0 ? round(($modelCounts['ex2'] / $totalLeads) * 100) : 0,
            'starray' => $totalLeads > 0 ? round(($modelCounts['starray'] / $totalLeads) * 100) : 0,
        ];

        // Analitik kunjungan website harian
        $todayVisitsCount = WebsiteVisit::whereDate('visit_date', today())->count();
        $todayUniqueVisitors = WebsiteVisit::whereDate('visit_date', today())->distinct('ip_address')->count('ip_address');
        $totalWebsiteVisits = WebsiteVisit::count();

        // Tren kunjungan 14 hari terakhir untuk Chart.js
        $chartDates = [];
        $chartViews = [];
        $chartUnique = [];

        for ($i = 13; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $dateString = $date->toDateString();
            $label = $date->translatedFormat('d M');

            $chartDates[] = $label;
            $viewsOnDate = WebsiteVisit::whereDate('visit_date', $dateString)->count();
            $chartViews[] = $viewsOnDate;

            $uniqueOnDate = WebsiteVisit::whereDate('visit_date', $dateString)->distinct('ip_address')->count('ip_address');
            $chartUnique[] = $uniqueOnDate;
        }

        // Halaman Terpopuler
        $topPages = WebsiteVisit::select('page_title', 'path', DB::raw('count(*) as total_views'))
            ->groupBy('page_title', 'path')
            ->orderByDesc('total_views')
            ->take(5)
            ->get();

        // Distribusi Perangkat Pengunjung
        $mobileVisits = WebsiteVisit::where('device_type', 'Mobile')->count();
        $desktopVisits = WebsiteVisit::where('device_type', 'Desktop')->count();
        $tabletVisits = WebsiteVisit::where('device_type', 'Tablet')->count();
        $totalDeviceVisits = max(1, $totalWebsiteVisits);
        $devicePercentages = [
            'mobile'  => round(($mobileVisits / $totalDeviceVisits) * 100),
            'desktop' => round(($desktopVisits / $totalDeviceVisits) * 100),
            'tablet'  => round(($tabletVisits / $totalDeviceVisits) * 100),
        ];

        $recentLeads = Lead::with('consultant')->latest()->take(8)->get();

        $upcomingTestDrives = TestDrive::with('lead')
            ->orderBy('scheduled_at', 'desc')
            ->take(5)
            ->get();

        $recentCreditSimulations = CreditSimulation::with('lead')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalLeads',
            'activeTestDrives',
            'spkDeals',
            'pendingCredit',
            'totalCredit',
            'conversionRate',
            'modelCounts',
            'modelPercentages',
            'recentLeads',
            'upcomingTestDrives',
            'recentCreditSimulations',
            'todayVisitsCount',
            'todayUniqueVisitors',
            'totalWebsiteVisits',
            'chartDates',
            'chartViews',
            'chartUnique',
            'topPages',
            'devicePercentages'
        ));
    }

    /**
     * Tampilan Sales Pipeline Kanban.
     */
    public function pipeline(Request $request): View
    {
        $selectedModel = $request->query('model', 'ALL');

        $query = Lead::query();
        if ($selectedModel !== 'ALL') {
            $query->where('model_interest', $selectedModel);
        }

        $allLeads = $query->orderBy('created_at', 'desc')->get();

        $kanban = [
            'new'         => $allLeads->where('stage', 'new'),
            'testdrive'   => $allLeads->where('stage', 'testdrive'),
            'negotiation' => $allLeads->where('stage', 'negotiation'),
            'won'         => $allLeads->where('stage', 'won'),
        ];

        $activeTestDrives = TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
        $pendingCredit = CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();

        return view('admin.pipeline', compact('kanban', 'selectedModel', 'activeTestDrives', 'pendingCredit'));
    }

    /**
     * Menyimpan prospek baru.
     */
    public function storeLead(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'           => ['required', 'string', 'max:255'],
            'phone'          => ['required', 'string', 'max:30'],
            'email'          => ['nullable', 'email', 'max:255'],
            'city'           => ['nullable', 'string', 'max:150'],
            'model_interest' => ['required', 'string'],
            'stage'          => ['required', 'in:new,testdrive,negotiation,won,lost'],
            'budget_plan'    => ['nullable', 'string', 'max:255'],
            'notes'          => ['nullable', 'string'],
        ]);

        $validated['assigned_user_id'] = Auth::id();
        $validated['city'] = $validated['city'] ?? 'BSD City Tangerang';
        $validated['source'] = 'CRM Input Showroom';
        $validated['last_contacted_at'] = now();

        $lead = Lead::create($validated);

        return back()->with('success', "Prospek {$lead->name} ({$lead->model_interest}) berhasil dicatat.");
    }

    /**
     * Memperbarui tahapan kanban prospek.
     */
    public function updateStage(Request $request, Lead $lead): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'stage' => ['required', 'in:new,testdrive,negotiation,won,lost'],
        ]);

        $lead->update([
            'stage' => $validated['stage'],
            'last_contacted_at' => now(),
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'status'  => 'success',
                'message' => "Prospek {$lead->name} berhasil diperbarui ke tahap: " . strtoupper($validated['stage']),
                'lead'    => $lead,
            ]);
        }

        return back()->with('success', "Tahap prospek {$lead->name} berhasil diubah ke: " . strtoupper($validated['stage']));
    }

    /**
     * Hapus / Soft Delete prospek.
     */
    public function destroyLead(Lead $lead): RedirectResponse
    {
        $name = $lead->name;
        $lead->delete();

        return back()->with('info', "Data prospek {$name} berhasil diarsipkan.");
    }

    /**
     * Menampilkan daftar reservasi test drive.
     */
    public function testDrives(): View
    {
        $testDrives = TestDrive::with('lead')
            ->orderBy('scheduled_at', 'desc')
            ->paginate(15);

        $activeTestDrives = TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
        $pendingCredit = CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();

        return view('admin.test-drives', compact('testDrives', 'activeTestDrives', 'pendingCredit'));
    }

    /**
     * Tambah reservasi test drive unit Geely.
     */
    public function storeTestDrive(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'lead_id'         => ['required', 'exists:leads,id'],
            'car_model'       => ['required', 'string'],
            'scheduled_at'    => ['required', 'date'],
            'venue'           => ['required', 'string'],
            'test_plate'      => ['nullable', 'string'],
            'feedback_notes'  => ['nullable', 'string'],
        ]);

        $validated['sales_pic'] = Auth::user()->name ?? 'Chanda Satya';
        $validated['status'] = 'Confirmed';

        TestDrive::create($validated);

        return back()->with('success', 'Jadwal test drive berhasil dialokasikan.');
    }

    /**
     * Update status verifikasi test drive.
     */
    public function updateTestDriveStatus(Request $request, TestDrive $testDrive): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:Pending,Confirmed,Completed,Cancelled'],
        ]);

        $testDrive->update($validated);

        return back()->with('success', "Status Test Drive {$testDrive->car_model} berhasil diperbarui ke: {$validated['status']}.");
    }

    /**
     * Daftar pengajuan simulasi kredit nasabah.
     */
    public function creditLeads(): View
    {
        $simulations = CreditSimulation::with('lead')
            ->latest()
            ->paginate(15);

        $activeTestDrives = TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
        $pendingCredit = CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();

        return view('admin.credit-leads', compact('simulations', 'activeTestDrives', 'pendingCredit'));
    }

    /**
     * Update status persetujuan leasing.
     */
    public function updateCreditStatus(Request $request, CreditSimulation $creditSimulation): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:Baru,Proses Survey,Disetujui,Ditolak'],
        ]);

        $creditSimulation->update($validated);

        return back()->with('success', "Status pengajuan kredit {$creditSimulation->customer_name} berhasil diperbarui ke: {$validated['status']}.");
    }

    /**
     * Menampilkan halaman manajemen foto Delivery Moments di CRM.
     */
    public function deliveryMoments(): View
    {
        $moments = DeliveryMoment::orderBy('display_order', 'asc')
            ->latest()
            ->paginate(12);

        $activeTestDrives = TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
        $pendingCredit = CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();

        return view('admin.delivery-moments', compact('moments', 'activeTestDrives', 'pendingCredit'));
    }

    /**
     * Mengunggah foto serah terima baru ke server dan database (Maksimal 50MB).
     */
    public function storeDeliveryMoment(Request $request): RedirectResponse
    {
        $request->validate([
            'photo'         => ['required', 'image', 'mimes:jpeg,png,jpg,webp', 'max:51200'], // Maks 50MB (51200 KB)
            'caption'       => ['nullable', 'string', 'max:255'],
            'display_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('delivery-moments', 'public');

            DeliveryMoment::create([
                'image_path'    => $path,
                'caption'       => $request->input('caption') ?: 'Momen Serah Terima Unit Geely BSD',
                'display_order' => $request->input('display_order', 0),
            ]);

            return back()->with('success', 'Foto serah terima berhasil ditambahkan ke homepage!');
        }

        return back()->withErrors(['photo' => 'Gagal mengunggah file foto. Silakan coba lagi.']);
    }

    /**
     * Menghapus foto delivery moment dari storage dan database.
     */
    public function destroyDeliveryMoment(DeliveryMoment $deliveryMoment): RedirectResponse
    {
        if (Storage::disk('public')->exists($deliveryMoment->image_path)) {
            Storage::disk('public')->delete($deliveryMoment->image_path);
        }

        $caption = $deliveryMoment->caption ?? 'Foto';
        $deliveryMoment->delete();

        return back()->with('info', "Foto [{$caption}] berhasil dihapus dari galeri serah terima.");
    }

    /**
     * Menampilkan halaman manajemen artikel di CRM.
     */
    public function articles(): View
    {
        $articles = Article::latest('published_at')
            ->latest()
            ->paginate(10);

        $activeTestDrives = TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
        $pendingCredit = CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();

        return view('admin.articles', compact('articles', 'activeTestDrives', 'pendingCredit'));
    }

    /**
     * Menyimpan artikel baru dari admin.
     */
    public function storeArticle(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'category'         => ['required', 'string', 'max:100'],
            'excerpt'          => ['nullable', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'author'           => ['nullable', 'string', 'max:150'],
            'thumbnail'        => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:51200'], // Maks 50MB
            'is_published'     => ['nullable', 'boolean'],
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords'    => ['nullable', 'string', 'max:255'],
            'canonical_url'    => ['nullable', 'url', 'max:255'],
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('articles', 'public');
        }

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;
        while (Article::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-" . $counter++;
        }

        $isPublished = $request->boolean('is_published', true);

        Article::create([
            'title'            => $validated['title'],
            'slug'             => $slug,
            'category'         => $validated['category'],
            'excerpt'          => $validated['excerpt'] ?: Str::limit(strip_tags($validated['content']), 160),
            'content'          => $validated['content'],
            'author'           => $validated['author'] ?: (Auth::user()->name ?? 'Tim Promo Geely BSD'),
            'thumbnail_path'   => $thumbnailPath,
            'is_published'     => $isPublished,
            'published_at'     => $isPublished ? now() : null,
            'meta_title'       => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords'    => $validated['meta_keywords'] ?? null,
            'canonical_url'    => $validated['canonical_url'] ?? null,
        ]);

        return back()->with('success', "Artikel '{$validated['title']}' berhasil dibuat lengkap dengan metadata SEO!");
    }

    /**
     * Memperbarui artikel yang sudah ada.
     */
    public function updateArticle(Request $request, Article $article): RedirectResponse
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'category'         => ['required', 'string', 'max:100'],
            'excerpt'          => ['nullable', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'author'           => ['nullable', 'string', 'max:150'],
            'thumbnail'        => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:51200'],
            'is_published'     => ['nullable', 'boolean'],
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords'    => ['nullable', 'string', 'max:255'],
            'canonical_url'    => ['nullable', 'url', 'max:255'],
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail_path && Storage::disk('public')->exists($article->thumbnail_path)) {
                Storage::disk('public')->delete($article->thumbnail_path);
            }
            $article->thumbnail_path = $request->file('thumbnail')->store('articles', 'public');
        }

        $isPublished = $request->boolean('is_published', true);

        $article->title = $validated['title'];
        $article->category = $validated['category'];
        $article->excerpt = $validated['excerpt'] ?: Str::limit(strip_tags($validated['content']), 160);
        $article->content = $validated['content'];
        $article->author = $validated['author'] ?: $article->author;
        $article->meta_title = $validated['meta_title'] ?? null;
        $article->meta_description = $validated['meta_description'] ?? null;
        $article->meta_keywords = $validated['meta_keywords'] ?? null;
        $article->canonical_url = $validated['canonical_url'] ?? null;
        
        if (!$article->is_published && $isPublished && !$article->published_at) {
            $article->published_at = now();
        }
        $article->is_published = $isPublished;
        $article->save();

        return back()->with('success', "Artikel '{$article->title}' dan konfigurasi SEO berhasil diperbarui.");
    }

    /**
     * Menghapus artikel dari database dan storage.
     */
    public function destroyArticle(Article $article): RedirectResponse
    {
        if ($article->thumbnail_path && Storage::disk('public')->exists($article->thumbnail_path)) {
            Storage::disk('public')->delete($article->thumbnail_path);
        }

        $title = $article->title;
        $article->delete();

        return back()->with('info', "Artikel '{$title}' berhasil dihapus.");
    }

    /**
     * Ekspor seluruh data prospek ke format CSV spreadsheet.
     */
    public function exportCsv(): StreamedResponse
    {
        $fileName = 'Promo_Geely_BSD_Leads_' . now()->format('Y-m-d_His') . '.csv';

        return response()->streamDownload(function () {
            $handle = fopen('php://output', 'w');
            
            fputcsv($handle, [
                'ID',
                'Nama Prospek',
                'WhatsApp / HP',
                'Email',
                'Domisili',
                'Unit Peminatan',
                'Tahapan Pipeline',
                'Skema Pembelian',
                'Catatan Sales',
                'Sales PIC',
                'Tanggal Masuk'
            ]);

            Lead::with('consultant')->chunk(100, function ($leads) use ($handle) {
                foreach ($leads as $lead) {
                    fputcsv($handle, [
                        $lead->id,
                        $lead->name,
                        $lead->phone,
                        $lead->email ?? '-',
                        $lead->city,
                        $lead->model_interest,
                        strtoupper($lead->stage),
                        $lead->budget_plan ?? 'Belum Dipilih',
                        $lead->notes ?? '',
                        $lead->consultant->name ?? 'Chanda Satya',
                        $lead->created_at->format('Y-m-d H:i:s'),
                    ]);
                }
            });

            fclose($handle);
        }, $fileName, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$fileName}\"",
        ]);
    }
}