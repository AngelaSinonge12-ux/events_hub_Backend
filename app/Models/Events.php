<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location',
        'total_seats',
        'price'
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Bookings::class);
    }
}
