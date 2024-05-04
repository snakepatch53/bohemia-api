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
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 2,
                'name' => 'Cócteles',
                'description' => 'Bebidas alcohólicas'
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 3,
                'name' => 'Para Cantar',
                'description' => 'Bebidas para cantar'
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 4,
                'name' => 'Botellas',
                'description' => 'Botellas de licor'
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 5,
                'name' => 'Vinos',
                'description' => 'Vinos'
            ]
        );
    }
}
