<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'full_name',
        'document_number',
        'nationality',
        'flight_id'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function baggage()
    {
        return $this->hasMany(Baggage::class);
    }
}
