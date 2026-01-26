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
        Schema::create('baggage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passenger_id')->constrained()->cascadeOnDelete();
            $table->foreignId('flight_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['hand', 'checked']);
            $table->decimal('weight', 5, 2);
            $table->enum('status', ['checked', 'loaded', 'delivered'])->default('checked');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baggage');
    }
};
