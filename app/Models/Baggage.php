<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baggage extends Model
{
    protected $fillable = [
        'passenger_id',
        'flight_id',
        'type',
        'weight',
        'status'
    ];

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
