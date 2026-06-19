<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

//cek ini coba kalo error
class TravelPackageDetail extends Model
{
    protected $table = 'travel_package_detail';

    protected $fillable = [
        'travel_package_id',
        'participant_count',
        'trip_type',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    // Relasi balik ke TravelPackage
    public function travelPackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id');
    }

    // Label rapi untuk tampilan
    public function getTripLabelAttribute(): string
    {
        return match ($this->trip_type) {
            'sunset_trip' => 'Sunset Trip',
            'medium_trip' => 'Medium Trip',
            'long_trip'   => 'Long Trip',
            default       => ucwords(str_replace('_', ' ', $this->trip_type)),
        };
    }
}
