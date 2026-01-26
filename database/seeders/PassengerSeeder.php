<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passenger::insert([
            ['full_name' => 'Juan Perez', 'document_number' => 'CL123456', 'nationality' => 'Chile', 'flight_id' => 1],
            ['full_name' => 'Maria Lopez', 'document_number' => 'PE654321', 'nationality' => 'Perú', 'flight_id' => 1],
            ['full_name' => 'Carlos Ruiz', 'document_number' => 'CO987654', 'nationality' => 'Colombia', 'flight_id' => 2],
            ['full_name' => 'Ana Gomez', 'document_number' => 'ES456789', 'nationality' => 'España', 'flight_id' => 3],
            ['full_name' => 'Luis Martinez', 'document_number' => 'AR111222', 'nationality' => 'Argentina', 'flight_id' => 4]
        ]);
    }
}
