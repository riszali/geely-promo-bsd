<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMoment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Menampilkan Halaman Utama (Home / Discover)
     */
    public function index(): View
    {
        // Ambil data momen serah terima aktif dari database
        $deliveryMoments = DeliveryMoment::orderBy('display_order', 'asc')
            ->latest()
            ->get();

        // Ambil artikel terpublikasi terbaru (maks 3 artikel teratas)
        $latestArticles = Article::published()
            ->take(3)
            ->get();

        return view('index', compact('deliveryMoments', 'latestArticles'));
    }

    /**
     * Menampilkan Halaman Discovery
     */
    public function discover(): View
    {
        return $this->index();
    }

    /**
     * Halaman Detail Model Geely EX2
     */
    public function ex2(?string $section = null): View
    {
        return view('pages.models.ex2', compact('section'));
    }

    /**
     * Halaman Detail Exterior Model Geely EX2
     */
    public function ex2Exterior(): View
    {
        return view('pages.models.ex2-exterior');
    }

    /**
     * Halaman Detail Interior Model Geely EX2
     */
    public function ex2Interior(): View
    {
        return view('pages.models.ex2-interior');
    }

    /**
     * Halaman Spesifikasi Lengkap Model Geely EX2
     */
    public function ex2Specification(): View
    {
        return view('pages.models.ex2-specification');
    }

    /**
     * Halaman Detail Model Geely EX5
     */
    public function ex5(?string $section = null): View
    {
        return view('pages.models.ex5', compact('section'));
    }

    /**
     * Halaman Detail Exterior Model Geely EX5
     */
    public function ex5Exterior(): View
    {
        return view('pages.models.ex5-exterior');
    }

    /**
     * Halaman Detail Interior Model Geely EX5
     */
    public function ex5Interior(): View
    {
        return view('pages.models.ex5-interior');
    }

    /**
     * Halaman Spesifikasi Lengkap Model Geely EX5
     */
    public function ex5Specification(): View
    {
        return view('pages.models.ex5-specification');
    }

    /**
     * Halaman Detail Model Geely Starray EM-i
     */
    public function starray(?string $section = null): View
    {
        return view('pages.models.starray', compact('section'));
    }

    /**
     * Halaman Detail Eksterior Geely Starray EM-i
     */
    public function starrayExterior(): View
    {
        return view('pages.models.starray-exterior');
    }

    /**
     * Halaman Detail Interior Model Geely Starray EM-i
     */
    public function starrayInterior(): View
    {
        return view('pages.models.starray-interior');
    }

    /**
     * Halaman Spesifikasi Lengkap Model Geely Starray EM-i
     */
    public function starraySpecification(): View
    {
        return view('pages.models.starray-specification');
    }

    /**
     * Form Reservasi Test Drive
     */
    public function testDrive(): View
    {
        return view('pages.test-drive');
    }

    /**
     * Halaman Kontak, Lokasi Dealer, dan Dukungan Pelanggan
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Alat Simulasi Kredit dan Pembiayaan
     */
    public function creditSimulation(): View
    {
        return view('pages.credit-simulation');
    }

    /**
     * Halaman Detail Baca Artikel Berita Geely BSD
     */
    public function articleDetail(string $slug): View
    {
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Tambah counter pembaca artikel
        $article->increment('views_count');

        // Rekomendasi artikel terkait lainnya
        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();

        return view('pages.article-detail', compact('article', 'relatedArticles'));
    }
}