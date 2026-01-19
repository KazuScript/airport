<?php

namespace Database\Seeders;

use App\Models\Airport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Airport::insert([
            [
                'name' => 'Aeropuerto Internacional Arturo Merino Benítez',
                'code' => 'SCL',
                'city' => 'Santiago',
                'country' => 'Chile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aeropuerto Internacional Ezeiza',
                'code' => 'EZE',
                'city' => 'Buenos Aires',
                'country' => 'Argentina',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aeropuerto Internacional Jorge Chávez',
                'code' => 'LIM',
                'city' => 'Lima',
                'country' => 'Peru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aeropuerto Internacional El Dorado',
                'code' => 'BOG',
                'city' => 'Bogotá',
                'country' => 'Colombia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aeropuerto Internacional de la Ciudad de México',
                'code' => 'MEX',
                'city' => 'Mexico City',
                'country' => 'Mexico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
