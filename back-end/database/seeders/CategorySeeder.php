<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categoy_1 = Category::create([
            'name' => 'Dicipline/cours',
            'description' => 'Description de la categorie dicipline',
        ]);
        $categoy_2 = Category::create([
            'name' => 'Evenements',
            'description' => 'Description de la categorie evenement',
        ]);

        $categoy_3 = Category::create([
            'name' => 'proffeseeurs',
            'description' => 'description de la category professeur',
        ]);

    }
}
