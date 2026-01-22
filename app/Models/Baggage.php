<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baggage extends Model
{
    protected $fillable = [
        'booking_id',
        'quantity',
        'weight_estimated',
        'extra_cost',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
