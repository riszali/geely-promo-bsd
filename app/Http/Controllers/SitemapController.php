<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
// use App\Models\Car; // <-- Buka komentar ini saat nanti Anda menggunakan Database

/**
 * SEO PRO: Sitemap Controller Dinamis
 * Kenapa ini penting? Google membenci sitemap yang tidak terupdate.
 * Controller ini memastikan setiap model mobil baru (EX5, dll) langsung terdeteksi.
 */
class SitemapController extends Controller
{
    public function index(): Response
    {
        // ==========================================
        // 1. DATA MODEL MOBIL (DINAMIS / STATIS)
        // ==========================================
        
        // CONTOH JIKA MENGGUNAKAN DATABASE ELOQUENT (DIREKOMENDASIKAN UNTUK PRODUKSI):
        // $models = Car::select('slug', 'updated_at')->get();

        // KARENA SAAT INI MASIH STATIS, KITA GUNAKAN ARRAY:
        // Catatan SEO: Gunakan waktu lampau yang tetap (misal subDays) jika konten belum benar-benar berubah
        // Slug disesuaikan dengan link yang ada di index.blade.php
        $models = [
            ['slug' => 'models/ex5', 'updated_at' => now()->subDays(10)],
            ['slug' => 'models/ex2', 'updated_at' => now()->subDays(5)],
            ['slug' => 'models/starray-em-i', 'updated_at' => now()],
        ];

        // ==========================================
        // 2. DATA HALAMAN UTAMA / STATIS
        // ==========================================
        // Disesuaikan dengan URL rute yang ada di index.blade.php
        $statics = [
            '/',
            '/credit-simulation',
            '/test-drive',
            '/location',
        ];

        // ==========================================
        // 3. DATA HALAMAN DETAIL (OPSIONAL)
        // ==========================================
        // Variabel ini dipanggil di blade sitemap, jadi kita sediakan array kosong
        // untuk mencegah pesan peringatan "undefined variable".
        $details = [];

        // Pastikan file sitemap.blade.php diletakkan di dalam folder resources/views/seo/
        return response()->view('seo.sitemap', [
            'models' => $models,
            'statics' => $statics,
            'details' => $details,
        ])->header('Content-Type', 'text/xml');
    }
}