<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi tabel pencatat kunjungan website Promo Geely BSD.
     */
    public function up(): void
    {
        Schema::create('website_visits', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45)->index();
            $table->string('path', 255)->index();
            $table->string('url', 500)->nullable();
            $table->string('page_title')->nullable();
            $table->string('referer', 500)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->string('device_type', 50)->default('Desktop'); // Mobile, Tablet, Desktop
            $table->date('visit_date')->index();
            $table->timestamps();
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_visits');
    }
};