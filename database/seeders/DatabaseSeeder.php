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
            \App\Models\Book::factory(100)->create();
            \App\Models\User::factory(100)->create();
            \App\Models\Panier::factory(100)->create();
            \App\Models\Commande::factory(100)->create();
            \App\Models\DetailsCommande::factory(100)->create();

        } catch (\Exception $e) {
            dd($e->getMessage()); // Afficher le message de l'exception pour déboguer l'erreur
        }
    }
}
