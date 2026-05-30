<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'name' => 'vegetarian'
            ],
            [
                'name' => 'non-vegetarian'
            ],
            [
                'name' => 'fastfood'
            ],
            [
                'name' => 'dessert'
            ],
            [
                'name' => 'drinks'
            ],
            [
                'name' => 'seafood'
            ],
        ]);

        $categories->each(function($cat){
            Categorie::create($cat);
        });
    }
}
