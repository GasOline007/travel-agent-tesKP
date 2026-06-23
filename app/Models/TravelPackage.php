<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class TravelPackage extends Model
{
    // 1. Nama Tabel (Opsional jika nama tabel adalah jamak dari nama model)
    protected $table = 'travel_packages';

    // 2. Fillable: Daftar kolom yang boleh diisi secara massal
    protected $fillable = [
        'type',
        'name',
        'slug',
        'is_recommended',
        'price',
        'original_price',
        'trip_sequence',
        'duration',
        'location',
        'image',
        'description',
    ];

    // 3. Casts: Mengubah tipe data secara otomatis saat diambil dari DB
    protected $casts = [
        'is_recommended' => 'boolean', // Data 0/1 di DB otomatis jadi true/false
        'price'          => 'decimal:2',
        'original_price' => 'decimal:2',
        'trip_sequence'  => 'array',
    ];


    protected static function booted(): void
    {
        // ── SAAT EDIT ──────────────────────────────────────
        static::updating(function (TravelPackage $package) {
            // Hapus foto sampul lama jika diganti
            if ($package->isDirty('image')) {
                $oldImage = $package->getOriginal('image');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            // ✅ Gallery sekarang dihandle terpisah lewat model TravelPackageGallery,
            // jadi tidak perlu logic isDirty('gallery') di sini.
        });

        // ── SAAT DELETE ──────────────────────────────────────
        static::deleting(function (TravelPackage $package) {
            // Hapus foto sampul
            if ($package->image) {
                Storage::disk('public')->delete($package->image);
            }

            // Hapus semua file fisik dari relasi galleries
            // Kita loop relasi galleries() yang kamu buat di bawahnya
            foreach ($package->galleries as $galleryItem) {
                if ($galleryItem->image) {
                    Storage::disk('public')->delete($galleryItem->image);
                }
            }
        });
    }



    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'travel_package_category');
    }

    public function galleries(): HasMany
    {
        return $this->hasMany(TravelPackageGallery::class)->orderBy('order');
    }

    public function itineraries(): HasMany
    {
        return $this->hasMany(TravelPackageItinerary::class)->orderBy('day_number')->orderBy('order');
    }

    public function points(): HasMany
    {
        return $this->hasMany(TravelPackagePoint::class)->orderBy('order');
    }

    public function inclusions(): HasMany
    {
        return $this->hasMany(TravelPackageInclusion::class, 'travel_package_id')->orderBy('order');
    }

    public function exclusions(): HasMany
    {
        return $this->hasMany(TravelPackageExclusion::class, 'travel_package_id')->orderBy('order');
    }

    public function notes(): HasMany
    {
        return $this->hasMany(TravelPackageNote::class, 'travel_package_id')->orderBy('order');
    }

    public function details(): HasMany
    {
        return $this->hasMany(TravelPackageDetail::class);
    }
}
