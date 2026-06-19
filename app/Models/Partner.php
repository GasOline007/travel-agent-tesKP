<?php

namespace App\Models;

use HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{

    protected $fillable = [
        'name',
        'logo',
    ];


    /**
     * Tambahkan sensor penghapus gambar otomatis di sini
     */
    protected static function booted(): void
    {
        // SKENARIO A: Saat data mitra dihapus
        static::deleting(function (Partner $partner) {
            // Perhatikan: Gunakan ->logo, bukan ->image
            if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
                Storage::disk('public')->delete($partner->logo);
            }
        });

        // SKENARIO B: Saat logo mitra diganti baru
        static::updating(function (Partner $partner) {
            if ($partner->isDirty('logo')) {
                $oldLogo = $partner->getOriginal('logo');
                
                if ($oldLogo && Storage::disk('public')->exists($oldLogo)) {
                    Storage::disk('public')->delete($oldLogo);
                }
            }
        });
    }
}
