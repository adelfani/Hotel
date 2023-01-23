<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kamer;
use App\Models\Klant;
use App\Models\Reservering;
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
        // Kamer::factory(5)->create();
        // Klant::factory(5)->create();
        Reservering::factory(10)->create();
    }
}
