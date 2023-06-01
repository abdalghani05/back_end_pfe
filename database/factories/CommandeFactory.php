<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
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
            'dateCommande' => $this->faker->date,
            'Montant' => $this->faker->randomFloat(2, 10, 100),
            'paymentMethod' => 'Carte',
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
