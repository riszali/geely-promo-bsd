<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Geely Indonesia - Web Routes
|--------------------------------------------------------------------------
|
| Dokumentasi rute untuk seluruh model kendaraan Geely, fitur interaktif,
| dan halaman brand discovery. Dirancang agar SEO-friendly.
|
*/

// =============================================================
// HALAMAN UTAMA & BRAND DISCOVERY
// =============================================================

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/discover', [PageController::class, 'discover'])->name('discover');


// =============================================================
// GRUP MODEL KENDARAAN (EX2, EX5, STARRAY)
// =============================================================

Route::prefix('models')->name('models.')->group(function () {
    
    // --- GEELY EX2 ---
    Route::get('/ex2', [PageController::class, 'ex2'])->name('ex2');
    
    Route::get('/ex2-exterior/detail', [PageController::class, 'ex2Exterior'])->name('ex2.exterior');
    
    Route::get('/ex2-interior/detail', [PageController::class, 'ex2Interior'])->name('ex2.interior');
    
    Route::get('/ex2-specification/detail', [PageController::class, 'ex2Specification'])->name('ex2.specification');


    // --- GEELY EX5 ---
    Route::get('/ex5', [PageController::class, 'ex5'])->name('ex5');
    
    Route::get('/ex5-exterior/detail', [PageController::class, 'ex5Exterior'])->name('ex5.exterior');

    Route::get('/ex5-interior/detail', [PageController::class, 'ex5Interior'])->name('ex5.interior');
    
    Route::get('/ex5-specification/detail', [PageController::class, 'ex5Specification'])->name('ex5.specification');


    // --- GEELY STARRAY EM-I ---
    Route::get('/starray-em-i', [PageController::class, 'starray'])->name('starray');

    Route::get('/starray-exterior/detail', [PageController::class, 'starrayExterior'])->name('starray.exterior');

    Route::get('/starray-interior/detail', [PageController::class, 'starrayInterior'])->name('starray.interior');

    Route::get('/starray-specification/detail', [PageController::class, 'starraySpecification'])->name('starray.specification');

});


// =============================================================
// FITUR INTERAKTIF & LAYANAN PELANGGAN
// =============================================================

Route::get('/test-drive', [PageController::class, 'testDrive'])->name('test-drive');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/credit-simulation', [PageController::class, 'creditSimulation'])->name('credit-simulation');


// =============================================================
// SEO & XML SITEMAP
// =============================================================

// Rute dinonaktifkan karena kita menggunakan file sitemap.xml statis di folder public
// Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// End of file