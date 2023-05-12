<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train; // Import the Trains model

class TrainsSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @param  Faker  $faker
     * @return void
     */

    public function run(Faker $faker)
    {


        for ($i = 0; $i < 50; $i++) {

            $code = '';
            for ($j = 0; $j < 5; $j++) {
                $randomChar = $faker->randomElement([$faker->randomLetter(), $faker->randomDigit]);
                $code .= $randomChar;
            }

            Train::create([
                'company' => $faker->name(),

                'departure_station' => $faker->city(),

                'arrival_station' => $faker->city(),

                'departure_day' => $faker->date(),

                'departure_time' => $faker->time(),

                'arrival_day' => $faker->date(),

                'arrival_time' => $faker->time(),

                'train_code' => strtoupper($code),

                'number_of_carriages' => $faker->numberBetween(1, 10),

                'on_time' => $faker->boolean(0.7),

                'cancelled' => $faker->boolean(0.3)




            ]);
        }
    }
}
