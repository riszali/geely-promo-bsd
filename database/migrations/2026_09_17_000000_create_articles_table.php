<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for Promo Geely BSD Articles with Complete SEO Suite.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('Promo & Berita');
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('thumbnail_path')->nullable();
            $table->string('author')->default('Tim Promo Geely BSD');
            $table->boolean('is_published')->default(true)->index();
            $table->unsignedBigInteger('views_count')->default(0);
            $table->timestamp('published_at')->nullable();

            // SEO Suite Columns
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};