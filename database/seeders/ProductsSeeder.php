<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $boardgames = Category::where('name', 'Bordspellen')->first();
        $cardgames = Category::where('name', 'Kaartspellen')->first();

        Product::insert([
            [
                'name' => 'Catan',
                'description' => 'Strategiespel voor 3 tot 4 spelers',
                'category_id' => $boardgames?->id,
            ],
            [
                'name' => 'Carcassonne',
                'description' => 'Tegellegspel met middeleeuws thema',
                'category_id' => $boardgames?->id,
            ],
            [
                'name' => 'Uno',
                'description' => 'Snel kaartspel voor het hele gezin',
                'category_id' => $cardgames?->id,
            ],
        ]);
    }
}
