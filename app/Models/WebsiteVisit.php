<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class WebsiteVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'path',
        'url',
        'page_title',
        'referer',
        'user_agent',
        'device_type',
        'visit_date',
    ];

    protected $casts = [
        'visit_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope untuk memfilter kunjungan pada tanggal hari ini.
     */
    public function scopeToday(Builder $query): Builder
    {
        return $query->whereDate('visit_date', today());
    }

    /**
     * Scope untuk memfilter kunjungan dalam rentang N hari terakhir.
     */
    public function scopeLastDays(Builder $query, int $days = 14): Builder
    {
        return $query->where('visit_date', '>=', now()->subDays($days)->toDateString());
    }
}