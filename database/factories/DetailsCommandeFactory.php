<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailsCommande>
 */
class DetailsCommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_book' => Book::factory()->create()->id,
            'id_commande'=> Commande::factory()->create()->id,
            'quantite' => $this->faker->randomFloat(2, 10, 100),
            'prixUnitaire' => $this->faker->randomFloat(2, 10, 100),
            'Montant' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
