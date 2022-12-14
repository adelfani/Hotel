<?php

namespace Database\Factories;

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
        $b =scandir(public_path('storage\images'));
        $a = rand(2, count($b) -1);

        return [
            'sort' => fake()->word(),
            'foto' => 'images/' . $b[$a],
            'Kamernummer' => fake()->randomNumber(5, true),
            'opervlakte' => fake()->randomFloat(2, 20, 90),
            'minibar_beschikbaarheid' => fake()->boolean(),
            'bad_beschikbaarheid' => fake()->boolean(),
            'aantal_personen' => fake()->randomDigit(),
            'prijs' => fake()->randomFloat(2, 20, 150)
        ];
    }
}
