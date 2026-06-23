<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TravelPackageNote extends Model
{
    protected $table = 'travel_package_points';

    protected $fillable = ['travel_package_id', 'type', 'content', 'order'];

    protected static function booted(): void
    {
        static::addGlobalScope(fn ($query) => $query->where('type', 'note'));
        static::creating(fn ($model) => $model->type = 'note');
    }

    public function travelPackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class);
    }
}