<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $fillable = [
        'state_id', 'name'
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
