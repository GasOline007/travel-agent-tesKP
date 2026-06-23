<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function travelPackages(): BelongsToMany
    {
        return $this->belongsToMany(TravelPackage::class, 'travel_package_category');
    }
}
