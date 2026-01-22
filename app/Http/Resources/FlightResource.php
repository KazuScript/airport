<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
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
                'code' => $this->origin->code,
                'name' => $this->origin->name,
                'city' => $this->origin->city,
            ],

            'destination' => [
                'code' => $this->destination->code,
                'name' => $this->destination->name,
                'city' => $this->destination->city,
            ],

            'departure_time' => $this->departure_time->toDateTimeString(),
            'arrival_time' => $this->arrival_time->toDateTimeString(),

            'price' => $this->price,
            'status' => $this->status,
        ];
    }
}
