<?php

namespace Database\Factories;

use App\Models\Kamer;
use App\Models\Klant;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservering>
 */
class ReserveringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kamer_id' => Kamer::factory(),
            'klant_id' => Klant::factory(),
            'datum_van_boeking' => fake()->date(),
            'Aankomstdatum' => fake()->date(),
            'Vertrekdatum' => fake()->date(),
        ];
    }
}
