<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Lead extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'city',
        'model_interest',
        'stage',
        'source',
        'budget_plan',
        'notes',
        'assigned_user_id',
        'last_contacted_at',
    ];

    protected $casts = [
        'last_contacted_at' => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    /**
     * Relasi ke seluruh riwayat jadwal Test Drive prospek.
     */
    public function testDrives(): HasMany
    {
        return $this->hasMany(TestDrive::class);
    }

    /**
     * Relasi ke seluruh pengajuan simulasi kredit leasing prospek.
     */
    public function creditSimulations(): HasMany
    {
        return $this->hasMany(CreditSimulation::class);
    }

    /**
     * Relasi ke staf Sales Consultant yang ditugaskan (User).
     */
    public function consultant(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }

    /**
     * Scope untuk memfilter prospek berdasarkan tahapan kanban.
     */
    public function scopeStage(Builder $query, string $stage): Builder
    {
        return $query->where('stage', $stage);
    }

    /**
     * Scope untuk memfilter prospek berdasarkan model kendaraan.
     */
    public function scopeModelInterest(Builder $query, string $model): Builder
    {
        return $query->where('model_interest', 'like', "%{$model}%");
    }

    /**
     * Accessor untuk memformat nomor telepon ke format internasional WhatsApp (+62).
     */
    public function getWhatsappNumberAttribute(): string
    {
        $clean = preg_replace('/[^0-9]/', '', (string)$this->phone);

        if (str_starts_with($clean, '0')) {
            return '62' . substr($clean, 1);
        }

        return $clean;
    }

    /**
     * Accessor untuk membuat tautan direct chat WhatsApp dengan pesan template otomatis.
     */
    public function getWhatsappUrlAttribute(): string
    {
        $salesPic = $this->consultant->name ?? 'Chanda Satya';
        $message = "Halo Bpk/Ibu {$this->name}, salam hangat dari {$salesPic} - Showroom Resmi Promo Geely BSD City. "
                 . "Terkait ketertarikan Anda pada unit {$this->model_interest}, apakah ada yang bisa kami bantu jadwalkan untuk konsultasi promo spesial atau booking test drive?";

        return 'https://wa.me/' . $this->whatsapp_number . '?text=' . rawurlencode($message);
    }
}