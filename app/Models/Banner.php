<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'image',
        'link',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        // Menghapus gambar lama ketika admin mengupload gambar baru (Update)
        static::updating(function ($banner) {
            if ($banner->isDirty('image') && ($banner->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($banner->getOriginal('image'));
            }
        });

        // Menghapus gambar dari storage ketika data banner dihapus (Delete)
        static::deleted(function ($banner) {
            if ($banner->image !== null) {
                Storage::disk('public')->delete($banner->image);
            }
        });
    }
}
