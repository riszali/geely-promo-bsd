<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class TestDrive extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'car_model',
        'scheduled_at',
        'venue',
        'status',
        'test_plate',
        'sales_pic',
        'feedback_notes',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'created_at'   => 'datetime',
        'updated_at'   => 'datetime',
    ];

    /**
     * Relasi balik ke konsumen pemesan test drive.
     */
    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }

    /**
     * Filter jadwal test drive yang akan datang.
     */
    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->whereDate('scheduled_at', '>=', now())
                     ->orderBy('scheduled_at', 'asc');
    }

    /**
     * Filter reservasi yang masih aktif (Pending atau Confirmed).
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->whereIn('status', ['Pending', 'Confirmed']);
    }
}