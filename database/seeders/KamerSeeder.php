<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamer')->insert([
            'sort' => 'lux',
            'foto' => 'asdfgaods[ohga',
            'Kamernummer' => 123,
            'opervlakte' => 4.5,
            'minibar_beschikbaarheid' => false,
            'bad_beschikbaarheid' => true,
            'aantal_personen' => 4,
            'prijs' => 69.99
        ]);
    }
}
