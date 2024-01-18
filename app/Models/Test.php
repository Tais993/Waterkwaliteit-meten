<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Test extends Model
{

    use HasFactory;

    public function getTestedOnAttribute($value): Carbon
    {
        return Carbon::parse($value);
    }

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
