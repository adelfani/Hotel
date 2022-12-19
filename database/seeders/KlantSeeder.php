<?php

namespace Database\Seeders;

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
        DB::table('klant')->insert(
        [
            'datum_van_boeking' => date('Y-m-d'),
            'naam' => 'fread',
            'address' => 'antartica',
            'Aankomstdatum' => date('Y-m-d'),
            'Vertrekdatum' => date('Y-m-d'),
            'Creditkaartnummer' => 134125453,
            'Kamernummer' => 123
        ],
        );
    }
}
