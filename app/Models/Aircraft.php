<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $fillable = [
        'airline_id',
        'model',
        'capacity',
        'registration_code',
        'range_km',
        'active'
    ];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
