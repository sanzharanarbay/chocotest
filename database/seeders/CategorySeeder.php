<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Clothes',
                'slug' => 'Clothes',
            ],
            [
                'name' => 'Footwear',
                'slug' => 'Footwear',
            ],
            [
                'name' => 'Accessories',
                'slug' => 'Accessories',
            ],

        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
