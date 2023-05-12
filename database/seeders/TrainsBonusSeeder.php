<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrainBonus; // Import the TrainBonus model

class TrainsBonusSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @param  Faker  $faker
     * @return void
     */
    public function run()
    {
        $trainFile = fopen(__DIR__ . './trains.csv', 'r');
        $trainCSV = fgetcsv($trainFile);
        $trainCSV = fgetcsv($trainFile);

        while ($trainCSV) {
            $train = new TrainBonus();

            $train->company = $trainCSV[0];
            $train->departure_station = $trainCSV[1];
            $train->arrival_station = $trainCSV[2];
            $train->departure_time = $trainCSV[3];
            $train->arrival_time = $trainCSV[4];
            $train->train_code = $trainCSV[5];
            $train->wagons_number = $trainCSV[6];
            $train->on_time = $trainCSV[7];
            $train->cancelled = $trainCSV[8];

            $train->save();

            $trainCSV = fgetcsv($trainFile);
        };
    }
}
