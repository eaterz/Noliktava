<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 't-shirt'
        ]);

        Category::create([
            'name' => 'pants'
        ]);

        Category::create([
            'name' => 'shoes'
        ]);

        Category::create([
            'name' => 'jacket'
        ]);

        Category::create([
            'name' => 'shorts'
        ]);
    }
}
