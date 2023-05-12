<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TrainsSeeder; // Add this line to import the TrainsSeeder class
use Database\Seeders\TrainsBonusSeeder; // Add this line to import the TrainsBonusSeeder class


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TrainsSeeder::class); // Register the TrainsSeeder class
        $this->call(TrainsBonusSeeder::class); // Register the TrainsSeeder class


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
