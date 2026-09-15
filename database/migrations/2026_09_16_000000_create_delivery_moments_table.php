<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('delivery_moments', function (Blueprint $table) {
            $table->id();
            $table->string('image_path'); // Lokasi file gambar
            $table->string('caption')->nullable(); // Nama konsumen atau unit yang diserahterimakan
            $table->integer('display_order')->default(0); // Urutan tampilan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_moments');
    }
};