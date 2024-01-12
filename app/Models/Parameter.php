<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parameter extends Model
{
    protected $fillable = [
        'name',
        'measuring_unit'
    ];
    public function DeviceType(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'deviceType_parameter', 'parameter_id', 'deviceType_id');
    }
}
