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
        Baggage::create([
            'booking_id' => 1,
            'quantity' => 1,
            'weight_estimated' => 20,
            'extra_cost' => 0,
        ]);
    }
}
