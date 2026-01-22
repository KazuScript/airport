<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->code,
            'status' => $this->status,
            'total_price' => $this->total_price,

            'flight' => [
                'flight_number' => $this->flight->flight_number,
                'departure_time' => $this->flight->departure_time->toDateTimeString(),
                'arrival_time' => $this->flight->arrival_time->toDateTimeString(),

                'airline' => [
                    'name' => $this->flight->airline->name,
                    'code' => $this->flight->airline->code,
                ],

                'origin' => [
                    'code' => $this->flight->origin->code,
                    'city' => $this->flight->origin->city,
                ],

                'destination' => [
                    'code' => $this->flight->destination->code,
                    'city' => $this->flight->destination->city,
                ],
            ],

            'passengers' => $this->passengers->map(fn($p) => [
                'first_name' => $p->first_name,
                'last_name' => $p->last_name,
                'document_number' => $p->document_number,
                'seat' => $p->seat,
            ]),

            'baggage' => $this->baggage->map(fn($b) => [
                'quantity' => $b->quantity,
                'weight_estimated' => $b->weight_estimated,
                'extra_cost' => $b->extra_cost,
            ]),
        ];
    }
}
