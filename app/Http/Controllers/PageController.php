<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Menampilkan Halaman Utama (Home / Discover)
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Menampilkan Halaman Discovery
     */
    public function discover(): View
    {
        return view('index');
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
     * Fix: Menambahkan method yang sebelumnya menyebabkan error
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
}