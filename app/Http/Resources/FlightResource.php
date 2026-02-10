<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'flight_number' => $this->flight_number,

            'airline' => [
                'id' => $this->airline->id,
                'name' => $this->airline->name,
                'code' => $this->airline->code,
            ],

            'origin' => [
                'code' => $this->originAirport->code,
                'name' => $this->originAirport->name,
                'city' => $this->originAirport->city,
            ],

            'destination' => [
                'code' => $this->destinationAirport->code,
                'name' => $this->destinationAirport->name,
                'city' => $this->destinationAirport->city,
            ],

            'departure_time' => $this->departure_time->toDateTimeString(),
            'arrival_time' => $this->arrival_time->toDateTimeString(),
            'status' => $this->status,
            'gate' => $this->gate,
        ];
    }
}

