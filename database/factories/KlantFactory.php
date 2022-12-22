<?php

namespace Database\Factories;

use App\Models\Kamer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klant>
 */
class KlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'datum_van_boeking' => fake()->date(),
            'naam' => fake()->name(),
            'address' => fake()->address(),
            'Aankomstdatum' => fake()->date(),
            'Vertrekdatum' => fake()->date(),
            'Creditkaartnummer' => fake()->creditCardNumber(),
            'Kamernummer' => Kamer::factory()
        ];
    }
}
