<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
//    use HasFactory;
    protected $fillable = [
        'naam',
        'type',
        'voorraad'
    ];
    public function Parameter(): belongsToMany
    {
        return $this->belongsToMany(Parameter::class, 'product_parameters', 'product_id', 'parameter_id');
    }
}
