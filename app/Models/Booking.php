<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'flight_id',
        'code',
        'status',
        'total_price',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }

    public function baggage()
    {
        return $this->hasMany(Baggage::class);
    }
}
