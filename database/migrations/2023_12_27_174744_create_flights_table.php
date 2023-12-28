<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\FlareClient\Time\Time;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
            $table->unsignedInteger('Flight_ID')->autoIncrement();
            $table->string('Aircraft_ID');
            $table->string('Departure_Airport');
            $table->string('Arrival_Airport');
            $table->dateTime('Departure_Time');
            $table->dateTime('Arrival_Time');
            $table->time('Flight_Duration');

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
