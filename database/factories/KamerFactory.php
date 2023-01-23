<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kamer>
 */
class KamerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $b = scandir(public_path('storage\images'));
        $a = rand(2, count($b) - 1);

        return [
            'sort' => fake()->word(),
            'foto' => 'images/' . $b[$a],
            'opervlakte' => fake()->randomFloat(2, 20, 90),
            'minibar_beschikbaarheid' => fake()->boolean(),
            'bad_beschikbaarheid' => fake()->boolean(),
            'aantal_personen' => fake()->numberBetween(1, 5),
            'prijs' => fake()->randomFloat(2, 20, 150),
        ];
    }
}
