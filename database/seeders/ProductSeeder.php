<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $product = [
            [
                'category_id' => 1,
                'name' => 'Dairy Milk Silk',
                'description' => 'Dairy Milk Silk',
                'price' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => '5 Start 3D',
                'description' => '5 Start 3D',
                'price' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Brinjal',
                'description' => 'Brinjal',
                'price' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Lady Fingure',
                'description' => 'Lady Fingure',
                'price' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Product::insert($product);
    }
}
