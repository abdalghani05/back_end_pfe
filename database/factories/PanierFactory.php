<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panier>
 */
class PanierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => User::factory()->create()->id,
            'id_book' => Book::factory()->create()->id,
            'quantite' => $this->faker->randomFloat(2, 10, 100),
            'prixUnitaire' => $this->faker->randomFloat(2, 10, 100),
            'Montant' => $this->faker->randomFloat(2, 10, 100),
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
