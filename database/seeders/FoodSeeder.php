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
            ],
            [
                'name' => 'Nachos Bohemios',
                'description' => 'Exquisita carne molida con salsa pomodoro, nuestro delicioso queso líquido con pico de gallo y guacamole',
                'price' => '3.99',
                'category_id' => 1
            ],
            [
                'name' => 'Yucas Rock and Roll',
                'description' => 'Yucas fritas acompañadas de lonito en salsa de vino tinto',
                'price' => '2.99',
                'category_id' => 1
            ],
            [
                'name' => 'Picada Bohemia',
                'description' => 'Yuca, chorizo, lomito de res en salsa blanca, pechuga de pollo en salsa de mostaza, camarones bohemios',
                'price' => '9.99',
                'category_id' => 1
            ],
            [
                'name' => 'Quesadillas Rancheras',
                'description' => 'Carne a la plancha rebosada en nuestra salsa texmex, acompañada de guacamole y yuca frita',
                'price' => '5.99',
                'category_id' => 1
            ],
            [
                'name' => 'Hamburguesa Bohemia',
                'description' => 'Pan de molde elaborado artesanalmente, 200 gr de carne molida, queso líquido, aguacate, camarón, lechuga, tomate, tocino, acompañado de yuca frita',
                'price' => '6.99',
                'category_id' => 1
            ],
            [
                'name' => 'Ensalada de Camarón',
                'description' => 'Delisiosos camarones en salsa textmex expuestos sobre una cama de nuestros productos del huerto',
                'price' => '5.99',
                'category_id' => 1
            ],
            [
                'name' => 'Ensalada César',
                'description' => 'Pechuga de pollo a la plancha expuesta sobre una cama de nuestros productos del huerto',
                'price' => '4.99',
                'category_id' => 1
            ],
            // cocteles
            [
                'name' => 'Michelada de limón',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Michelada de maracuyá',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Mojito clásico de limón',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Mojito de mora',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Mojito de maracuyá',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Cuba libre',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Saltamontes',
                'price' => '6',
                'category_id' => 2
            ],
            [
                'name' => 'Tequila Sunrise',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Sex on beach',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Laguna azul',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Laguna azul',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Coctel Bohemio',
                'price' => '6',
                'category_id' => 2
            ],
            [
                'name' => 'Padrino',
                'price' => '6',
                'category_id' => 2
            ],
            [
                'name' => 'Margarita',
                'price' => '6',
                'category_id' => 2
            ],
            [
                'name' => 'Shot de tequila',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Gin tonic',
                'price' => '5',
                'category_id' => 2
            ],
            [
                'name' => 'Orgasmo',
                'price' => '6',
                'category_id' => 2
            ],
            [
                'name' => 'Piña colada',
                'price' => '6',
                'category_id' => 2
            ],
            // Para cantar
            [
                'name' => 'Mata Bohemios pequeño',
                'price' => '20',
                'category_id' => 3
            ],
            [
                'name' => 'Mata Bohemios grande',
                'price' => '35',
                'category_id' => 3
            ],
            // Botellas
            [
                'name' => 'Jhonny Walker',
                'price' => '100',
                'category_id' => 4
            ],
            [
                'name' => 'Buchanans',
                'price' => '90',
                'category_id' => 4
            ],
            [
                'name' => 'Jack Daniels',
                'price' => '90',
                'category_id' => 4
            ],
            [
                'name' => 'Jose Cuervo',
                'price' => '75',
                'category_id' => 4
            ],
            [
                'name' => 'Jhonny Rojo',
                'price' => '45',
                'category_id' => 4
            ],
            [
                'name' => 'Jhagger',
                'price' => '50',
                'category_id' => 4
            ],
            [
                'name' => 'Tequila charro',
                'price' => '35',
                'category_id' => 4
            ],
            // Vinos
            [
                'name' => 'Vino herbido Jarra',
                'price' => '15',
                'category_id' => 5
            ],
            [
                'name' => 'Sangria Jarra',
                'price' => '15',
                'category_id' => 5
            ],
            [
                'name' => 'calimocha Copa',
                'price' => '5',
                'category_id' => 5
            ],
            [
                'name' => 'Borgoña Copa',
                'price' => '5',
                'category_id' => 5
            ],
            [
                'name' => 'Borgoña Jarra',
                'price' => '15',
                'category_id' => 5
            ],
            [
                'name' => 'Copa de Vino',
                'price' => '4',
                'category_id' => 5
            ]
        );
    }
}
