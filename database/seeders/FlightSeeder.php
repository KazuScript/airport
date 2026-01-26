<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::insert([
            [
                'flight_number' => 'LA100',
                'airline_id' => 1,
                'aircraft_id' => 1,
                'origin_airport_id' => 1,
                'destination_airport_id' => 2,
                'departure_time' => now()->addHours(2),
                'arrival_time' => now()->addHours(5),
                'gate' => 'A1',
                'status' => 'scheduled'
            ],
            [
                'flight_number' => 'H2200',
                'airline_id' => 2,
                'aircraft_id' => 2,
                'origin_airport_id' => 1,
                'destination_airport_id' => 3,
                'departure_time' => now()->addHours(3),
                'arrival_time' => now()->addHours(7),
                'gate' => 'B3',
                'status' => 'boarding'
            ],
            [
                'flight_number' => 'AV450',
                'airline_id' => 3,
                'aircraft_id' => 3,
                'origin_airport_id' => 3,
                'destination_airport_id' => 5,
                'departure_time' => now()->addHours(5),
                'arrival_time' => now()->addHours(12),
                'gate' => 'C2',
                'status' => 'delayed'
            ],
            [
                'flight_number' => 'IB900',
                'airline_id' => 4,
                'aircraft_id' => 4,
                'origin_airport_id' => 5,
                'destination_airport_id' => 1,
                'departure_time' => now()->addHours(6),
                'arrival_time' => now()->addHours(14),
                'gate' => 'D5',
                'status' => 'scheduled'
            ],
            [
                'flight_number' => 'AR700',
                'airline_id' => 5,
                'aircraft_id' => 5,
                'origin_airport_id' => 4,
                'destination_airport_id' => 1,
                'departure_time' => now()->addHours(1),
                'arrival_time' => now()->addHours(4),
                'gate' => 'A4',
                'status' => 'departed'
            ]
        ]);
    }
}
