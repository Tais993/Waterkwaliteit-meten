<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parameter extends Model
{
//    use HasFactory;

    public function Product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_parameters', 'parameter_id', 'product_id');
    }
}
