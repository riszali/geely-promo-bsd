<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\TestDrive;
use App\Models\CreditSimulation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;

class PublicLeadController extends Controller
{
    /**
     * Menerima reservasi Test Drive dari halaman publik (/test-drive).
     * 1. Menyimpan data Lead & Test Drive ke database CRM.
     * 2. Menghubungkan konsumen langsung ke WhatsApp Sales.
     */
    public function storeTestDrive(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'phone'        => ['required', 'string', 'max:30'],
            'email'        => ['nullable', 'email', 'max:255'],
            'city'         => ['nullable', 'string', 'max:150'],
            'car_model'    => ['required', 'string'],
            'scheduled_at' => ['required'],
            'venue'        => ['nullable', 'string', 'max:255'],
            'notes'        => ['nullable', 'string'],
        ]);

        // Normalisasi model jika dikirim value kode (ex5, ex2, starray)
        $modelName = match(strtolower(trim($validated['car_model']))) {
            'ex5'     => 'Geely EX5',
            'ex2'     => 'Geely EX2',
            'starray' => 'Starray EM-i',
            default   => $validated['car_model'],
        };

        // 1. Simpan atau perbarui data Lead di database CRM
        $lead = Lead::updateOrCreate(
            ['phone' => $validated['phone']],
            [
                'name'              => $validated['name'],
                'email'             => $validated['email'] ?? null,
                'city'              => $validated['city'] ?? 'BSD City Tangerang',
                'model_interest'    => $modelName,
                'stage'             => 'testdrive',
                'source'            => 'Web Booking Test Drive',
                'notes'             => $validated['notes'] ?? 'Reservasi uji jalan mandiri dari halaman test drive.',
                'last_contacted_at' => now(),
            ]
        );

        // 2. Alokasikan ke antrean reservasi Armada Test Drive Showroom BSD
        TestDrive::create([
            'lead_id'        => $lead->id,
            'car_model'      => $modelName,
            'scheduled_at'   => Carbon::parse($validated['scheduled_at']),
            'venue'          => $validated['venue'] ?? 'Showroom Geely BSD City',
            'status'         => 'Pending',
            'sales_pic'      => 'Chanda Satya',
            'feedback_notes' => $validated['notes'] ?? 'Menunggu konfirmasi jadwal uji jalan konsumen.',
        ]);

        // 3. Format pesan WhatsApp resmi
        $formattedDate = Carbon::parse($validated['scheduled_at'])->translatedFormat('l, d F Y jam H:i');
        $venue = $validated['venue'] ?? 'Showroom Geely BSD City';
        
        $waMessage = "Halo Promo Geely BSD,\n\n"
                   . "Saya ingin melakukan *Test Drive*:\n\n"
                   . "*Model:* {$modelName}\n"
                   . "*Nama:* {$validated['name']}\n"
                   . "*WhatsApp:* {$validated['phone']}\n"
                   . "*Jadwal:* {$formattedDate} WIB\n\n"
                   . "Mohon konfirmasinya. Terima kasih!";

        $targetPhone = "6281295443338";
        $waUrl = "https://wa.me/{$targetPhone}?text=" . rawurlencode($waMessage);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Reservasi Test Drive berhasil dicatat di CRM!',
                'wa_url'  => $waUrl,
            ]);
        }

        return back()
            ->with('success', 'Reservasi Test Drive Anda berhasil tercatat di sistem dealer Promo Geely BSD!')
            ->with('wa_url', $waUrl);
    }

    /**
     * Menerima pengajuan Simulasi Kredit dari halaman publik (/credit-simulation).
     */
    public function storeCreditSimulation(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'name'                => ['required', 'string', 'max:255'],
            'phone'               => ['required', 'string', 'max:30'],
            'email'               => ['nullable', 'email', 'max:255'],
            'car_model'           => ['required', 'string'],
            'down_payment'        => ['required', 'numeric', 'min:0'],
            'tenor_months'        => ['required', 'integer', 'in:12,24,36,48,60'],
            'monthly_installment' => ['required', 'numeric', 'min:0'],
            'preferred_leasing'   => ['nullable', 'string', 'max:100'],
        ]);

        $lead = Lead::updateOrCreate(
            ['phone' => $validated['phone']],
            [
                'name'              => $validated['name'],
                'email'             => $validated['email'] ?? null,
                'model_interest'    => $validated['car_model'],
                'stage'             => 'negotiation',
                'source'            => 'Kalkulator Simulasi Kredit Web',
                'budget_plan'       => 'DP Rp ' . number_format($validated['down_payment'], 0, ',', '.') . ' (' . $validated['tenor_months'] . ' Bulan)',
                'last_contacted_at' => now(),
            ]
        );

        CreditSimulation::create([
            'lead_id'             => $lead->id,
            'customer_name'       => $validated['name'],
            'phone'               => $validated['phone'],
            'car_model'           => $validated['car_model'],
            'down_payment'        => $validated['down_payment'],
            'tenor_months'        => $validated['tenor_months'],
            'monthly_installment' => $validated['monthly_installment'],
            'preferred_leasing'   => $validated['preferred_leasing'] ?? 'Maybank Finance',
            'status'              => 'Baru',
        ]);

        $waMsg = "Halo Promo Geely BSD,\n\n"
               . "Saya {$validated['name']} telah melakukan kalkulasi simulasi kredit unit {$validated['car_model']}:\n"
               . "• DP: Rp " . number_format($validated['down_payment'], 0, ',', '.') . "\n"
               . "• Tenor: {$validated['tenor_months']} Bulan\n"
               . "• Estimasi Angsuran: Rp " . number_format($validated['monthly_installment'], 0, ',', '.') . "/bln\n\n"
               . "Mohon info promo bunga spesialnya. Terima kasih!";

        $targetPhone = "6281295443338";
        $waUrl = "https://wa.me/{$targetPhone}?text=" . rawurlencode($waMsg);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'wa_url'  => $waUrl,
            ]);
        }

        return back()
            ->with('success', 'Simulasi kredit berhasil disimpan!')
            ->with('wa_url', $waUrl);
    }
}