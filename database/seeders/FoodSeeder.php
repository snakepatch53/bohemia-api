<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    public function run()
    {
        DB::table('food')->insert(
            [
                'name' => 'Alitas BBQ Hard Rock',
                'description' => 'Deliciosas alitas bañadas en salsa BBQ a su elección, acompañadas de ensalada fresca, patacones o yuca',
                'price' => '6.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Nachos Bohemios',
                'description' => 'Exquisita carne molida con salsa pomodoro, nuestro delicioso queso líquido con pico de gallo y guacamole',
                'price' => '3.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Yucas Rock and Roll',
                'description' => 'Yucas fritas acompañadas de lonito en salsa de vino tinto',
                'price' => '2.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Picada Bohemia',
                'description' => 'Yuca, chorizo, lomito de res en salsa blanca, pechuga de pollo en salsa de mostaza, camarones bohemios',
                'price' => '9.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Quesadillas Rancheras',
                'description' => 'Carne a la plancha rebosada en nuestra salsa texmex, acompañada de guacamole y yuca frita',
                'price' => '5.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Hamburguesa Bohemia',
                'description' => 'Pan de molde elaborado artesanalmente, 200 gr de carne molida, queso líquido, aguacate, camarón, lechuga, tomate, tocino, acompañado de yuca frita',
                'price' => '6.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Ensalada de Camarón',
                'description' => 'Delisiosos camarones en salsa textmex expuestos sobre una cama de nuestros productos del huerto',
                'price' => '5.99',
                'category_id' => 1
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Ensalada César',
                'description' => 'Pechuga de pollo a la plancha expuesta sobre una cama de nuestros productos del huerto',
                'price' => '4.99',
                'category_id' => 1
            ]
        );
        // cocteles
        DB::table('food')->insert(
            [
                'name' => 'Michelada de limón',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Michelada de maracuyá',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Mojito clásico de limón',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Mojito de mora',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Mojito de maracuyá',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Cuba libre',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Saltamontes',
                'price' => '6',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Tequila Sunrise',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Sex on beach',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Laguna azul',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Laguna azul',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Coctel Bohemio',
                'price' => '6',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Padrino',
                'price' => '6',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Margarita',
                'price' => '6',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Shot de tequila',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Gin tonic',
                'price' => '5',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Orgasmo',
                'price' => '6',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Piña colada',
                'price' => '6',
                'category_id' => 2
            ]
        );
        DB::table('food')->insert(
            // Para cantar
            [
                'name' => 'Mata Bohemios pequeño',
                'price' => '20',
                'category_id' => 3
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Mata Bohemios grande',
                'price' => '35',
                'category_id' => 3
            ]
        );
        // Botellas
        DB::table('food')->insert(
            [
                'name' => 'Jhonny Walker',
                'price' => '100',
                'category_id' => 4
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Buchanans',
                'price' => '90',
                'category_id' => 4
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Jack Daniels',
                'price' => '90',
                'category_id' => 4
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Jose Cuervo',
                'price' => '75',
                'category_id' => 4
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Jhonny Rojo',
                'price' => '45',
                'category_id' => 4
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Jhagger',
                'price' => '50',
                'category_id' => 4
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Tequila charro',
                'price' => '35',
                'category_id' => 4
            ]
        );
        // Vinos
        DB::table('food')->insert(
            [
                'name' => 'Vino herbido Jarra',
                'price' => '15',
                'category_id' => 5
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Sangria Jarra',
                'price' => '15',
                'category_id' => 5
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'calimocha Copa',
                'price' => '5',
                'category_id' => 5
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Borgoña Copa',
                'price' => '5',
                'category_id' => 5
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Borgoña Jarra',
                'price' => '15',
                'category_id' => 5
            ]
        );
        DB::table('food')->insert(
            [
                'name' => 'Copa de Vino',
                'price' => '4',
                'category_id' => 5
            ]
        );
    }
}
