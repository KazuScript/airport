<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->foreignId('airline_id')->constrained();
            $table->foreignId('aircraft_id')->constrained();
            $table->foreignId('origin_airport_id')->constrained('airports');
            $table->foreignId('destination_airport_id')->constrained('airports');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('gate')->nullable();
            $table->enum('status', [
                'scheduled',
                'boarding',
                'delayed',
                'departed',
                'arrived',
                'canceled'
            ])->default('scheduled');
            $table->text('control_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
