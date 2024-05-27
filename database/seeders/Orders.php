<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orders::create([
            'name' => 't-shirt',
            "created" => '22:12:12',
            'deadline' => '23:12:12'
        ]);
    }
}
