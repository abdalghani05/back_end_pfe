<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Author;
use App\Models\Categorie;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'publication_date' => $this->faker->date,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'id_author' => Author::factory()->create()->id,
            'id_categorie' => Categorie::factory()->create()->id,
            'status' => $this->faker->randomElement([1,0]),
        ];
    }
}
