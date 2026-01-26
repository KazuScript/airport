<?php

namespace Database\Seeders;

use App\Models\Baggage;
use Illuminate\Database\Seeder;

class BaggageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Baggage::insert([
            ['passenger_id' => 1, 'flight_id' => 1, 'type' => 'checked', 'weight' => 20, 'status' => 'loaded'],
            ['passenger_id' => 2, 'flight_id' => 1, 'type' => 'hand', 'weight' => 8, 'status' => 'checked'],
            ['passenger_id' => 3, 'flight_id' => 2, 'type' => 'checked', 'weight' => 23, 'status' => 'loaded'],
            ['passenger_id' => 4, 'flight_id' => 3, 'type' => 'checked', 'weight' => 18, 'status' => 'delivered'],
            ['passenger_id' => 5, 'flight_id' => 4, 'type' => 'hand', 'weight' => 7, 'status' => 'checked']
        ]);
    }
}
