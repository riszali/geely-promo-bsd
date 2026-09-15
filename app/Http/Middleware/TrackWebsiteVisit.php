<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\WebsiteVisit;
use Illuminate\Support\Facades\Schema;

class TrackWebsiteVisit
{
    /**
     * Handle incoming request dan catat kunjungan publik website.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Jangan catat jika request bukan method GET, request AJAX, atau mengarah ke area admin/crm
        if ($request->method() !== 'GET' || $request->is('admin*') || $request->ajax() || $request->wantsJson()) {
            return $response;
        }

        // Abaikan file asset statis jika terkena routing
        if (preg_match('/\.(jpg|jpeg|png|gif|svg|webp|css|js|woff|woff2|ttf|mp4|xml|txt|ico)$/i', $request->path())) {
            return $response;
        }

        try {
            // Deteksi tipe perangkat sederhana
            $userAgent = (string) $request->header('User-Agent', '');
            $deviceType = 'Desktop';
            if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', $userAgent)) {
                $deviceType = 'Tablet';
            } elseif (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile|iphone)/i', $userAgent)) {
                $deviceType = 'Mobile';
            }

            // Identifikasi judul halaman ramah baca berdasarkan path
            $path = '/' . ltrim($request->path(), '/');
            $pageTitle = match(true) {
                $path === '/' => 'Beranda Utama Promo Geely BSD',
                str_contains($path, 'models/ex5') => 'Katalog Geely EX5 (Smart SUV)',
                str_contains($path, 'models/ex2') => 'Katalog Geely EX2 (Urban Crossover)',
                str_contains($path, 'models/starray') => 'Katalog Geely Starray EM-i (Hybrid)',
                str_contains($path, 'test-drive') => 'Formulir Reservasi Test Drive',
                str_contains($path, 'credit-simulation') => 'Kalkulator Simulasi Kredit',
                str_contains($path, 'contact') => 'Kontak & Lokasi Showroom',
                default => 'Halaman ' . ucwords(str_replace(['-', '/'], ' ', $path)),
            };

            WebsiteVisit::create([
                'ip_address'  => $request->ip() ?? '127.0.0.1',
                'path'        => $path,
                'url'         => substr($request->fullUrl(), 0, 500),
                'page_title'  => $pageTitle,
                'referer'     => substr((string) $request->header('referer'), 0, 500) ?: 'Direct / Bookmark',
                'user_agent'  => substr($userAgent, 0, 500),
                'device_type' => $deviceType,
                'visit_date'  => today()->toDateString(),
            ]);
        } catch (\Throwable $e) {
            // Error logger diserap agar tidak mengganggu pengalaman pengunjung jika database belum termigrasi
            report($e);
        }

        return $response;
    }
}