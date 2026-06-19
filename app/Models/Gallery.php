<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $fillable = [
        'image',
        'location',
        'customer',
        'caption',
    ];


    /**
     * 2. TAMBAHKAN FUNGSI BOOTED INI 👈
     * Fungsi ini akan memantau segala aktivitas yang terjadi pada tabel Gallery
     */
    protected static function booted(): void
    {
        // SKENARIO A: Saat data dihapus (Delete / Bulk Delete)
        static::deleting(function (Gallery $gallery) {
            // Cek apakah ada file fisik di storage, jika ada, hapus file tersebut
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
        });

        // SKENARIO B: Saat data diupdate (Ganti foto baru)
        static::updating(function (Gallery $gallery) {
            // Cek apakah kolom 'image' mengalami perubahan (diganti foto baru)
            if ($gallery->isDirty('image')) {
                // Ambil nama file foto yang lama
                $oldImage = $gallery->getOriginal('image');
                
                // Hapus foto yang lama dari storage
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
