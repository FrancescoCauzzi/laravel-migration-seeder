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
            $startDate = $faker->dateTime(); // Get the current date and time as a DateTime object
            $endDate = $startDate->modify('+1 day'); // Add 1 day to the start date

            $date1 = $faker->dateTimeBetween($startDate, $endDate);
            $date2 = $faker->dateTimeBetween($date1, $endDate);


            $time1 = $faker->time(); // Generate the first random time

            $minTime2 = date('H:i:s', strtotime($time1) + (rand(2, 8) * 60 * 60)); // Add 2 hours to time1
            $time2 = $faker->time($minTime2); // Generate the second random time after the minimum time

            if ($time2 < $time1) {
                $date2 = $date2->modify('+1 day');
            }

            $code = '';
            for ($j = 0; $j < 5; $j++) {
                $randomChar = $faker->randomElement([$faker->randomLetter(), $faker->randomDigit]);
                $code .= $randomChar;
            }

            Train::create([
                'company' => $faker->company(),

                'departure_station' => $faker->city(),

                'arrival_station' => $faker->city(),

                'departure_day' => $date1,

                'departure_time' => $time1,

                'arrival_day' => $date2,

                'arrival_time' => $time2,

                'train_code' => strtoupper($code),

                'number_of_carriages' => $faker->numberBetween(1, 10),

                'on_time' => $faker->boolean(80),

                'cancelled' => $faker->boolean(20)




            ]);
        }
    }
}
