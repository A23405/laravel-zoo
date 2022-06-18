<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(areasSeeder::class);
        $this->call(speciesarchivesSeeder::class);
        $this->call(animalfileSeeder::class);
        $this->call(health_recordsSeeder::class);
        $this->call(medical_recordsSeeder::class);
        $this->call(conservation_levelsSeeder::class);
    }
}
