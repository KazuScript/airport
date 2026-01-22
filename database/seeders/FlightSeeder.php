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
        $latam = Airline::where('code', 'LA')->first();
        $sky   = Airline::where('code', 'SKY')->first();

        $scl = Airport::where('code', 'SCL')->first();
        $lim = Airport::where('code', 'LIM')->first();
        $eze = Airport::where('code', 'EZE')->first();

        Flight::insert([
            [
                'airline_id' => $latam->id,
                'origin_airport_id' => $scl->id,
                'destination_airport_id' => $lim->id,
                'flight_number' => 'LA245',
                'departure_time' => Carbon::now()->addDays(1)->setTime(8, 30),
                'arrival_time' => Carbon::now()->addDays(1)->setTime(12, 0),
                'duration_minutes' => 210,
                'price' => 150000,
                'status' => 'scheduled',
                'capacity' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'airline_id' => $sky->id,
                'origin_airport_id' => $scl->id,
                'destination_airport_id' => $eze->id,
                'flight_number' => 'SK512',
                'departure_time' => Carbon::now()->addDays(2)->setTime(15, 0),
                'arrival_time' => Carbon::now()->addDays(2)->setTime(17, 30),
                'duration_minutes' => 150,
                'price' => 200000,
                'status' => 'scheduled',
                'capacity' => 186,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
