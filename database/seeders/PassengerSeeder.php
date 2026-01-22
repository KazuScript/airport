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
        Passenger::create([
            'booking_id' => 1,
            'first_name' => 'Juan',
            'last_name' => 'Pérez',
            'document_number' => '12345678',
            'seat' => '12A',
        ]);
    }
}
