<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'content',
        'thumbnail_path',
        'author',
        'is_published',
        'views_count',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'views_count'  => 'integer',
        'published_at' => 'datetime',
        'created_at'   => 'datetime',
        'updated_at'   => 'datetime',
    ];

    /**
     * Boot model untuk auto-generate unique slug jika tidak diberikan.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            if (empty($article->slug)) {
                $slug = Str::slug($article->title);
                $originalSlug = $slug;
                $count = 1;

                while (static::where('slug', $slug)->exists()) {
                    $slug = "{$originalSlug}-" . $count++;
                }

                $article->slug = $slug;
            }

            if (empty($article->published_at) && $article->is_published) {
                $article->published_at = now();
            }
        });
    }

    /**
     * Accessor URL thumbnail artikel.
     */
    public function getThumbnailUrlAttribute(): string
    {
        if (empty($this->thumbnail_path)) {
            return asset('images/og-default.jpg');
        }

        if (str_starts_with($this->thumbnail_path, 'http') || str_starts_with($this->thumbnail_path, 'images/')) {
            return asset($this->thumbnail_path);
        }

        return Storage::disk('public')->url($this->thumbnail_path);
    }

    /**
     * Accessor SEO Title cerdas (fallback otomatis ke Title artikel).
     */
    public function getSeoTitleAttribute(): string
    {
        return $this->meta_title ?: ($this->title . ' | Promo Geely BSD');
    }

    /**
     * Accessor SEO Description cerdas (fallback ke excerpt atau snippet konten).
     */
    public function getSeoDescriptionAttribute(): string
    {
        if (!empty($this->meta_description)) {
            return $this->meta_description;
        }

        if (!empty($this->excerpt)) {
            return Str::limit(strip_tags($this->excerpt), 160);
        }

        return Str::limit(strip_tags($this->content ?? ''), 160);
    }

    /**
     * Accessor SEO Keywords.
     */
    public function getSeoKeywordsAttribute(): string
    {
        if (!empty($this->meta_keywords)) {
            return $this->meta_keywords;
        }

        return 'Promo Geely BSD, Mobil Listrik Geely, Geely EX5 Tangerang, Geely EX2, Starray EM-i, Promo Mobil BSD';
    }

    /**
     * Perkiraan estimasi waktu baca dalam menit.
     */
    public function getReadingTimeAttribute(): int
    {
        $wordCount = str_word_count(strip_tags($this->content ?? ''));
        return max(1, (int) ceil($wordCount / 180));
    }

    /**
     * Scope artikel yang sudah dipublikasikan.
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)->orderByDesc('published_at');
    }
}