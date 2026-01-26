<?php

namespace Database\Seeders;

use App\Models\Aircraft;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AircraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aircraft::insert([
        [
            'airline_id' => 1,
            'model' => 'Airbus A320',
            'capacity' => 180,
            'registration_code' => 'CC-BAS',
            'range_km' => 6100,
            'active' => true
        ],
        [
            'airline_id' => 2,
            'model' => 'Airbus A321',
            'capacity' => 220,
            'registration_code' => 'CC-SKY',
            'range_km' => 5900,
            'active' => true
        ],
        [
            'airline_id' => 3,
            'model' => 'Boeing 787',
            'capacity' => 250,
            'registration_code' => 'N787AV',
            'range_km' => 14100,
            'active' => true
        ],
        [
            'airline_id' => 4,
            'model' => 'Airbus A350',
            'capacity' => 300,
            'registration_code' => 'EC-MAD',
            'range_km' => 15000,
            'active' => true
        ],
        [
            'airline_id' => 5,
            'model' => 'Boeing 737',
            'capacity' => 170,
            'registration_code' => 'LV-ARG',
            'range_km' => 5600,
            'active' => true
        ]
    ]);
    }
}
