<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $this->call([
            UserSeeder::class,
            //CategorySeeder::class,
            //TaskSeeder::class
        ]);
        Category::factory(5)->create();
        // \App\Models\User::factory(10)->create();
    }
}
