<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'flight_id' => 1,
            'code' => strtoupper(Str::random(6)),
            'status' => 'confirmed',
            'total_price' => 150000,
        ]);
    }
}
