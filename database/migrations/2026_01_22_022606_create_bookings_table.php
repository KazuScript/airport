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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('flight_id')->constrained()->cascadeOnDelete();

            $table->string('code')->unique(); // código de reserva (PNR)
            $table->enum('status', ['reserved', 'confirmed', 'cancelled'])->default('reserved');

            $table->integer('total_price'); //suma vuelo + equipaje +   extras

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
