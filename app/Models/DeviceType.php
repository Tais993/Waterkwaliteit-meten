<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DeviceType extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'description',
        'image'
    ];

    public function parameters(): BelongsToMany
    {
        return $this->belongsToMany(Parameter::class);
    }
}
