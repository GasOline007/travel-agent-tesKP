<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TravelPackageInclusion extends Model
{
    protected $table = 'travel_package_points';

    protected $fillable = ['travel_package_id', 'type', 'content', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope(fn ($query) => $query->where('type', 'inclusion'));
        static::creating(fn ($model) => $model->type = 'inclusion');
    }

    public function travelPackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class);
    }
}