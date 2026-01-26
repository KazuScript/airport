<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    public function run(): void
    {
        Airline::insert([
            [
                'name' => 'LATAM Airlines',
                'description' => 'Aerolínea líder en Sudamérica',
                'iata_code' => 'LA',
                'website_url' => 'https://www.latam.com',
                'country' => 'Chile',
                'active' => true
            ],
            [
                'name' => 'Sky Airline',
                'description' => 'Aerolínea low cost',
                'iata_code' => 'H2',
                'website_url' => 'https://www.skyairline.com',
                'country' => 'Chile',
                'active' => true
            ],
            [
                'name' => 'Avianca',
                'description' => 'Aerolínea colombiana',
                'iata_code' => 'AV',
                'website_url' => 'https://www.avianca.com',
                'country' => 'Colombia',
                'active' => true
            ],
            [
                'name' => 'Iberia',
                'description' => 'Aerolínea española',
                'iata_code' => 'IB',
                'website_url' => 'https://www.iberia.com',
                'country' => 'España',
                'active' => true
            ],
            [
                'name' => 'Aerolineas Argentinas',
                'description' => 'Aerolínea nacional de Argentina',
                'iata_code' => 'AR',
                'website_url' => 'https://www.aerolineas.com.ar',
                'country' => 'Argentina',
                'active' => true
            ]
        ]);
    }
}
