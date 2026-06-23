<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TravelPackagePoint extends Model
{
    protected $table = 'travel_package_points';

    protected $fillable = ['travel_package_id', 'type', 'content', 'order'];

    public function travelPackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class);
    }
}