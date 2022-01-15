<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'item_name' => 'Tools',
            ],
            [
                'item_name' => 'Plants',
            ],
            [
                'item_name' => 'Soil',
            ],
            [
                'item_name' => 'Pesticide',
            ],
        ];
        ItemType::insert($items);
    }
}
