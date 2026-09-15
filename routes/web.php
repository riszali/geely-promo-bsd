<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PublicLeadController;
use App\Http\Controllers\Admin\CrmController;
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

Route::get('/articles/{slug}', [PageController::class, 'articleDetail'])->name('articles.show');


// =============================================================
// SEO & XML SITEMAP
// =============================================================

// Rute dinonaktifkan karena kita menggunakan file sitemap.xml statis di folder public
// Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');


// =============================================================
// HANDLER FORM PUBLIK KE DATABASE CRM
// =============================================================

Route::post('/test-drive', [PublicLeadController::class, 'storeTestDrive'])->name('test-drive.submit');
Route::post('/credit-simulation', [PublicLeadController::class, 'storeCreditSimulation'])->name('credit-simulation.submit');


// =============================================================
// PROMO GEELY BSD - EXECUTIVE CRM & DEALER COMMAND CENTER
// =============================================================

Route::prefix('admin/crm')->name('admin.crm.')->group(function () {
    
    // Auth Dealer
    Route::middleware('guest')->group(function () {
        Route::get('/login', [CrmController::class, 'showLogin'])->name('login');
        Route::post('/login', [CrmController::class, 'authenticate'])->name('authenticate');
    });

    // CRM Protected Area
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [CrmController::class, 'logout'])->name('logout');

        // Cockpit Dashboard
        Route::get('/dashboard', [CrmController::class, 'dashboard'])->name('dashboard');

        // Sales Pipeline & Prospek
        Route::get('/pipeline', [CrmController::class, 'pipeline'])->name('pipeline');
        Route::post('/leads', [CrmController::class, 'storeLead'])->name('leads.store');
        Route::patch('/leads/{lead}/stage', [CrmController::class, 'updateStage'])->name('leads.updateStage');
        Route::delete('/leads/{lead}', [CrmController::class, 'destroyLead'])->name('leads.destroy');
        Route::get('/leads/export', [CrmController::class, 'exportCsv'])->name('leads.export');

        // Test Drive Schedule
        Route::get('/test-drives', [CrmController::class, 'testDrives'])->name('testdrives.index');
        Route::post('/test-drives', [CrmController::class, 'storeTestDrive'])->name('testdrives.store');
        Route::patch('/test-drives/{testDrive}/status', [CrmController::class, 'updateTestDriveStatus'])->name('testdrives.updateStatus');

        // Simulasi Kredit Prospek
        Route::get('/credit-leads', [CrmController::class, 'creditLeads'])->name('creditleads.index');
        Route::patch('/credit-leads/{creditSimulation}/status', [CrmController::class, 'updateCreditStatus'])->name('creditleads.updateStatus');

        // Manajemen Galeri Delivery Moments
        Route::get('/delivery-moments', [CrmController::class, 'deliveryMoments'])->name('deliverymoments.index');
        Route::post('/delivery-moments', [CrmController::class, 'storeDeliveryMoment'])->name('deliverymoments.store');
        Route::delete('/delivery-moments/{deliveryMoment}', [CrmController::class, 'destroyDeliveryMoment'])->name('deliverymoments.destroy');

        // Manajemen Artikel & Berita
        Route::get('/articles', [CrmController::class, 'articles'])->name('articles.index');
        Route::post('/articles', [CrmController::class, 'storeArticle'])->name('articles.store');
        Route::put('/articles/{article}', [CrmController::class, 'updateArticle'])->name('articles.update');
        Route::delete('/articles/{article}', [CrmController::class, 'destroyArticle'])->name('articles.destroy');
    });
});

// End of file