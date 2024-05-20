<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ricards',
            'email' => 'ricards@localhost',
            'usertype' => 'admin',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'harijs',
            'email' => 'harijs@localhost',
            'usertype' => 'noliktava',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'ruslans',
            'email' => 'ruslans@localhost',
            'usertype' => 'plaukti',
            'password' => bcrypt('123'),
        ]);
    }
}
