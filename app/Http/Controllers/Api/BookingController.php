<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookingResource;
use App\Models\Booking;

class BookingController extends Controller
{
    public function show(string $code)
    {
        $booking = Booking::with([
            'flight.airline',
            'flight.origin',
            'flight.destination',
            'passengers',
            'baggage'
        ])->where('code', $code)->firstOrFail();

        return new BookingResource($booking);
    }
}
