<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'nombre' => $faker->randomElement(['Arepas','Asados','Bebidas','Cafetería','Carnes','Ceviches','Chorrillanas','Churrascos','Comida Árabe','Comida China','Comida Japonesa','Comida Mexicana','Comida Peruana','Comida rápida','Comida Thai','Comida vegana','Comida vegetariana','Completos','Desayunos','Empanadas','Ensaladas','Hamburguesas','Helados','Licuados y jugos','Menú del día','Pastas','Pescados y mariscos','Pizzas','Pollo','Postres y tortas','Sandwiches','Sushi'])
        ];
});