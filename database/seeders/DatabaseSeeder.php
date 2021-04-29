<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(15)->create();
        \App\Models\Provider::factory(12)->create();
        \App\Models\Product::factory(50)->create();
        

    }
}
