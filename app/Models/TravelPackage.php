<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelPackage extends Model
{
    // 1. Nama Tabel (Opsional jika nama tabel adalah jamak dari nama model)
    protected $table = 'travel_packages';

    // 2. Fillable: Daftar kolom yang boleh diisi secara massal
    protected $fillable = [
        'type', 
        'name', 
        'slug', 
        'category', 
        'is_recommended', 
        'price', 
        'original_price', 
        'trip_sequence', 
        'duration', 
        'location', 
        'image', 
        'description', 
        'gallery', 
        'itinerary', 
        'inclusions', 
        'exclusions', 
        'notes'
    ];

    // 3. Casts: Mengubah tipe data secara otomatis saat diambil dari DB
    protected $casts = [
        'category'       => 'array', // Data JSON di DB otomatis jadi Array PHP
        'gallery'        => 'array',
        'itinerary'      => 'array',
        'inclusions'     => 'array',
        'exclusions'     => 'array',
        'notes'          => 'array',
        'is_recommended' => 'boolean', // Data 0/1 di DB otomatis jadi true/false
        'price'          => 'decimal:2',
        'original_price' => 'decimal:2',
        'trip_sequence'  => 'array',
    ];


    /* protected static function booted(): void
    {
        // ── SAAT EDIT ──────────────────────────────────────
        static::updating(function (TravelPackage $package) {
            // Hapus foto sampul lama jika diganti
            if ($package->isDirty('image')) {
                $imageLama = $package->getOriginal('image');
                if ($imageLama) {
                    Storage::disk('public')->delete($imageLama);
                }
            }

            // Hapus hanya foto gallery yang dihilangkan
            if ($package->isDirty('gallery')) {
                $galleryLama = $package->getOriginal('gallery') ?? [];
                $galleryBaru = $package->gallery ?? [];
                $fotoDihapus = array_diff($galleryLama, $galleryBaru);

                foreach ($fotoDihapus as $foto) {
                    Storage::disk('public')->delete($foto);
                }
            }
        });

        // Saat DELETE — hapus semua gambar
        static::deleting(function (TravelPackage $package) {
            // Hapus foto sampul
            if ($package->image) {
                Storage::disk('public')->delete($package->image);
            }

            // Hapus semua foto gallery
            if ($package->gallery) {
                foreach ($package->gallery as $foto) {
                    Storage::disk('public')->delete($foto);
                }
            }
        });
    }


    // Relasi ke harga peserta
    public function Detail(): HasMany
    {
        return $this->hasMany(TravelPackageDetail::class);
    } */



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

            // Hapus hanya foto gallery yang dihilangkan
            if ($package->isDirty('gallery')) {
                $oldGallery = $package->getOriginal('gallery') ?? [];
                $newGallery = $package->gallery ?? [];
                $deletedPhotos = array_diff($oldGallery, $newGallery);

                foreach ($deletedPhotos as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }
        });

        // ── SAAT DELETE ──────────────────────────────────────
        static::deleting(function (TravelPackage $package) {
            // Hapus foto sampul
            if ($package->image) {
                Storage::disk('public')->delete($package->image);
            }

            // Hapus semua foto gallery
            if ($package->gallery) {
                foreach ($package->gallery as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }
        });
    }

    // Relasi ke harga peserta (Diubah menjadi huruf kecil dan jamak)
    public function details(): HasMany
    {
        return $this->hasMany(TravelPackageDetail::class);
    }
}
