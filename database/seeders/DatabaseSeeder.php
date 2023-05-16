<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'Muhammad Adi Saputro',
                'email'=>'muhammadxxz7@gmail.com',
                'password'=>bcrypt('12345678'),
                'role'=>'admin',
            ]
            );
        // \App\Models\User::factory(10)->create();
    }
}
