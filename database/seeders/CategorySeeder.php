<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $category = [
            [
                'name' => 'Choaclates',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vegetables',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Category::insert($category);
    }
}
