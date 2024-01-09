<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        'naam',
        'type',
        'voorraad'
    ];

    public function parameters(): BelongsToMany
    {
        return $this->belongsToMany(Parameter::class);
    }
}
