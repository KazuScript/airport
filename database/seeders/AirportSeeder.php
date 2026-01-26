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
                'name' => 'Aeropuerto Arturo Merino Benítez',
                'iata_code' => 'SCL',
                'city' => 'Santiago',
                'country' => 'Chile',
                'timezone' => 'America/Santiago'
            ],
            [
                'name' => 'Aeropuerto Jorge Chávez',
                'iata_code' => 'LIM',
                'city' => 'Lima',
                'country' => 'Perú',
                'timezone' => 'America/Lima'
            ],
            [
                'name' => 'Aeropuerto El Dorado',
                'iata_code' => 'BOG',
                'city' => 'Bogotá',
                'country' => 'Colombia',
                'timezone' => 'America/Bogota'
            ],
            [
                'name' => 'Aeropuerto Ezeiza',
                'iata_code' => 'EZE',
                'city' => 'Buenos Aires',
                'country' => 'Argentina',
                'timezone' => 'America/Argentina/Buenos_Aires'
            ],
            [
                'name' => 'Aeropuerto Adolfo Suárez Madrid-Barajas',
                'iata_code' => 'MAD',
                'city' => 'Madrid',
                'country' => 'España',
                'timezone' => 'Europe/Madrid'
            ]
        ]);
    }
}
