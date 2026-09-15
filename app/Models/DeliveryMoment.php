<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DeliveryMoment extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'caption',
        'display_order',
    ];

    protected $casts = [
        'display_order' => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
    ];

    /**
     * Accessor untuk mendapatkan URL lengkap gambar.
     */
    public function getImageUrlAttribute(): string
    {
        // Jika path sudah berupa asset bawaan (misal images/customer/...)
        if (str_starts_with($this->image_path, 'images/') || str_starts_with($this->image_path, 'http')) {
            return asset($this->image_path);
        }

        // Jika file diupload via Storage disk public
        return Storage::disk('public')->url($this->image_path);
    }
}