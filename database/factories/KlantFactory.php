<?php

namespace Database\Factories;

use App\Models\Kamer;
use Illuminate\Support\Facades\DB;
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
        $kamer = Kamer::orderBy('id', 'desc')->first();

        return [
            'naam' => fake()->name(),
            'address' => fake()->address(),
            'Creditkaartnummer' => fake()->creditCardNumber(),
            'kamer_id' => $kamer,
        ];
    }
}
