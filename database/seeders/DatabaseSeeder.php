<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            \App\Models\Author::factory(100)->create();
            \App\Models\Categorie::factory(100)->create();
            \App\Models\Book::factory(100)->create();

        } catch (\Exception $e) {
            dd($e->getMessage()); // Afficher le message de l'exception pour déboguer l'erreur
        }
    }
}
