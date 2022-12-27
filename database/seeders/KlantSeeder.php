<?php

namespace Database\Seeders;

use App\Models\Kamer;
use App\Models\Klant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Klant::factory(15)->create();
    }
}
