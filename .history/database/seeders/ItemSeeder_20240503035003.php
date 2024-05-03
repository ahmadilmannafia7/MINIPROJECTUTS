<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'C0001',
            'name' => 'Chelsea Home Kit',
            'price' => 2500000,
            'desc' => 'Chelsea Nike Home Stadium Sponsored Shirt 2023-24',
            'stock' => 98
        ]);

        Item::query()->create([
            'unit_id' => 2,
            'code' => 'C0002',
            'name' => 'Chelsea Home Socks',
            'price' => 32,
            'desc' => 'Chelsea Nike Home Socks 2023-24',
            'stock' => 198
        ]);

        Item::query()->create([
            'unit_id' => 3,
            'code' => 'C0003',
            'name' => 'Chelsea Home Set Little Kids',
            'price' => 39,
            'desc' => 'Chelsea Nike Home Stadium Sponsored Kit 2023-24 - Little Kids',
            'stock' => 88
        ]);

        
    }
}
