<?php

namespace Database\Seeders;

use App\Models\Flights;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for($i =0;$i < 60;$i++) {
            Flights::create([
                'Flight_ID'=> $i+1,
                'Aircraft_ID'=> 'AIRLINE_'.$i,
                'Departure_Airport'=> $faker->sentence(),
                'Arrival_Airport' => $faker->sentence(),
                'Departure_Time'=> $faker->dateTime(),
                'Arrival_Time'=> $faker->dateTime(),
                'Flight_Duration' => $faker->time()

            ]);
        }
        //
    }
}
