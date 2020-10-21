<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'T-Shirt 1',
                'color' => 'Blue',
                'weight' => 12,
                'price' => 1000,
                'category_id' => 1
            ],
            [
                'name' => 'Adidas Sneakers',
                'color' => 'white',
                'weight' => 5,
                'price' => 2000,
                'category_id' => 2
            ],
            [
                'name' => 'Rolex Watch',
                'color' => 'gold',
                'weight' => 3,
                'price' => 8000,
                'category_id' => 3
            ],
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
