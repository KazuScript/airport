<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        Flight::insert([
            [
                'flight_number' => 'LA100',
                'airline_id' => 1,
                'aircraft_id' => 1,
                'origin_airport_id' => 1,
                'destination_airport_id' => 2,
                'departure_time' => $now->copy()->setTime(23, 58),
                'arrival_time' => $now->copy()->setTime(23, 58)->addHours(2),
                'gate' => 'A1',
                'status' => 'scheduled'
            ],
            [
                'flight_number' => 'H2200',
                'airline_id' => 2,
                'aircraft_id' => 2,
                'origin_airport_id' => 1,
                'destination_airport_id' => 3,
                'departure_time' => $now->copy()->addDay()->setTime(1, 9),
                'arrival_time' => $now->copy()->addDay()->setTime(1, 9)->addHours(3),
                'gate' => 'B3',
                'status' => 'boarding'
            ],
            [
                'flight_number' => 'AV450',
                'airline_id' => 3,
                'aircraft_id' => 3,
                'origin_airport_id' => 3,
                'destination_airport_id' => 5,
                'departure_time' => $now->copy()->setTime(3, 55),
                'arrival_time' => $now->copy()->setTime(3, 55)->addHours(2),
                'gate' => 'C2',
                'status' => 'delayed'
            ],
            [
                'flight_number' => 'IB900',
                'airline_id' => 4,
                'aircraft_id' => 4,
                'origin_airport_id' => 5,
                'destination_airport_id' => 1,
                'departure_time' => $now->copy()->addHours(6),
                'arrival_time' => $now->copy()->addHours(6)->addHours(8),
                'gate' => 'D5',
                'status' => 'scheduled'
            ],
            [
                'flight_number' => 'AR700',
                'airline_id' => 5,
                'aircraft_id' => 5,
                'origin_airport_id' => 4,
                'destination_airport_id' => 1,
                'departure_time' => $now->copy()->addHours(1),
                'arrival_time' => $now->copy()->addHours(1)->addHours(3),
                'gate' => 'A4',
                'status' => 'departed'
            ],
        ]);
    }
}
