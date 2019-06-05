<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu_Pedido;
use Faker\Generator as Faker;

$factory->define(Menu_Pedido::class, function (Faker $faker) {
    $id_menu = DB::table('menus')->select('id')->get();
    $id_pedido = DB::table('pedidos')->select('id')->get();
    return [
        'id_menu'=> $id_menu->random()->id,
        'id_pedido'=> $id_pedido->random()->id,
        'aclaraciones' =>$faker->text($maxNbChars= 200),  
    ];
});
