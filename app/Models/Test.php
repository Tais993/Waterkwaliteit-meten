<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Test extends Model
{

    use HasFactory;

    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }

    public function parameter(): BelongsTo
    {
        return $this->belongsTo(Parameter::class);
    }

    public function watersource(): BelongsTo
    {
        return $this->belongsTo(Watersource::class);
    }
}
