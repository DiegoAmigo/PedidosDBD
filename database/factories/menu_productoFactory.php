<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu_Producto;
use Faker\Generator as Faker;

$factory->define(Menu_Producto::class, function (Faker $faker) {
    $id_menu = DB::table('menus')->select('id')->get();
    $id_producto = DB::table('productos')->select('id')->get();
    return [
        'id_menu'=> $id_menu->random()->id,
        'id_producto'=> $id_producto->random()->id,
        'seleccionable'=>$faker->boolean(),
    ];
});
