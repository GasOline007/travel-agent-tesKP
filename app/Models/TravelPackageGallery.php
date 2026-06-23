<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class TravelPackageGallery extends Model
{
    protected $fillable = ['travel_package_id', 'image', 'order'];

    protected static function booted(): void
    {
        // Otomatis hapus file fisik saat data gallery di-delete
        static::deleting(function (TravelPackageGallery $gallery) {
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
        });
    }

    public function travelPackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class);
    }

}