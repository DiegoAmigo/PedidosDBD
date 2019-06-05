<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Producto_Ingrediente;
use Faker\Generator as Faker;

$factory->define(Producto_Ingrediente::class, function (Faker $faker) {
    $id_producto = DB::table('productos')->select('id')->get();
    $id_ingrediente = DB::table('ingredientes')->select('id')->get();
    return [
        'id_producto'=> $id_producto->random()->id,
        'id_ingrediente'=> $id_ingrediente->random()->id,
    ];
});
