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
            'title' => $this->faker->unique()->jobTitle,
            'photo'=>'https://media.istockphoto.com/id/628925698/vector/pile-of-hardcover-books.jpg?s=612x612&w=0&k=20&c=UskxzCZAQ4LXrgMhgW3M8Q5jdtWFPZ8WxwosF6h6euI=',
            'publication_date' => $this->faker->date,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'id_author' => Author::factory()->create()->id,
            'id_categorie' => Categorie::factory()->create()->id,
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
