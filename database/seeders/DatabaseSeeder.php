<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use App\Models\ItemType;
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
            UsersTableSeeder::class,
            ItemsSeeder::class,
            ItemCategorySeeder::class,
        ]);
    }
}
