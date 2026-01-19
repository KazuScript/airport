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
                'code' => 'LA',
                'baggage_policy' => '1 maleta de cabina incluida',
                'capacity' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sky Airline',
                'code' => 'SKY',
                'baggage_policy' => 'Equipaje de mano con costo adicional',
                'capacity' => 186,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JetSmart',
                'code' => 'JSM',
                'baggage_policy' => 'Tarifa básica sin equipaje',
                'capacity' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
