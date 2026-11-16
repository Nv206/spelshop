<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesSeeder extends Seeder
{
    /**

    */
    public function run()
    {
        $categories = [
            [
                'name' => 'Bordspellen',
                'description' => 'Alle soorten bordspellen'
            ],
            [
                'name' => 'Kaartspellen',
                'description' => 'Kaartspellen voor verzamelen en spelen'
            ],
            [
                'name' => 'Puzzels',
                'description' => 'Legpuzzels en breinbrekers'
            ]
        ];

        Category::insert($categories);
    }

    
}
