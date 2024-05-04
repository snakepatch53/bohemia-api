<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert(
            [
                'id' => 1,
                'name' => 'Comida',
                'description' => 'Platos de comida'
            ],
            [
                'id' => 2,
                'name' => 'Cócteles',
                'description' => 'Bebidas alcohólicas'
            ],
            [
                'id' => 3,
                'name' => 'Para Cantar',
                'description' => 'Bebidas para cantar'
            ],
            [
                'id' => 4,
                'name' => 'Botellas',
                'description' => 'Botellas de licor'
            ],
            [
                'id' => 5,
                'name' => 'Vinos',
                'description' => 'Vinos'
            ]
        );
    }
}
