<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bookings extends Model
{

    protected $fillable = [
        'user_id',
        'event_id',
        'status',
        'total_amount',
        'status',

    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Events(): BelongsTo
    {
        return $this->belongsTo(Events::class);
    }
}
