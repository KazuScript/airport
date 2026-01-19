<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
     use HasFactory;

    protected $fillable = [
        'airline_id',
        'origin_airport_id',
        'destination_airport_id',
        'flight_number',
        'departure_time',
        'arrival_time',
        'duration_minutes',
        'status',
        'capacity',
    ];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function origin()
    {
        return $this->belongsTo(Airport::class, 'origin_airport_id');
    }

    public function destination()
    {
        return $this->belongsTo(Airport::class, 'destination_airport_id');
    }
}
