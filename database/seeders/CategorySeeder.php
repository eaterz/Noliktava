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
            'name' => 't-shirt',
            'image' => 'https://thehavenbar.com/wp-content/uploads/2023/05/38189-1.jpg'
        ]);

        Category::create([
            'name' => 'pants',
            'image' => 'https://prd.cc.duluthtrading.com/dw/image/v2/BBNM_PRD/on/demandware.static/-/Sites-dtc-master-catalog/default/dwae419508/images/large/B2167_DEK.jpg?sw=980'
        ]);

        Category::create([
            'name' => 'shoes',
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/99486859-0ff3-46b4-949b-2d16af2ad421/custom-nike-dunk-high-by-you-shoes.png'
        ]);

        Category::create([
            'name' => 'jacket',
            'image' => 'https://m.media-amazon.com/images/I/71g+ctE-efL._AC_SX679_.jpg'
        ]);

        Category::create([
            'name' => 'shorts',
            'image' => 'https://www.bn3th.com/cdn/shop/files/ss23-sport-runners-high-short-black-M521012-028-front.jpg?v=1695670500&width=1400'
        ]);
    }
}
