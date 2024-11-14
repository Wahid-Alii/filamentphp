<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    protected $fillable = [
        'country_id', 'name'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

}
