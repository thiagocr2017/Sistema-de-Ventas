<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(15)->create();
        \App\Models\Provider::factory(3)->create();
        \App\Models\Product::factory(18)->create();
        \App\Models\Client::factory(50)->create();
        

    }
}
