<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CreditSimulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'customer_name',
        'phone',
        'car_model',
        'down_payment',
        'tenor_months',
        'monthly_installment',
        'preferred_leasing',
        'status',
    ];

    protected $casts = [
        'down_payment'        => 'decimal:2',
        'monthly_installment' => 'decimal:2',
        'tenor_months'        => 'integer',
        'created_at'          => 'datetime',
        'updated_at'          => 'datetime',
    ];

    /**
     * Relasi ke data kontak Lead.
     */
    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }

    /**
     * Format rupiah untuk Down Payment.
     */
    public function getFormattedDpAttribute(): string
    {
        return 'Rp ' . number_format((float)$this->down_payment, 0, ',', '.');
    }

    /**
     * Format rupiah untuk Angsuran Bulanan.
     */
    public function getFormattedInstallmentAttribute(): string
    {
        return 'Rp ' . number_format((float)$this->monthly_installment, 0, ',', '.') . ' /bln';
    }
}