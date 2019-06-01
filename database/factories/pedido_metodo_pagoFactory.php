<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pedido_Metodo_pago;
use Faker\Generator as Faker;

$factory->define(Pedido_Metodo_pago::class, function (Faker $faker) {
	$id_pedido = DB::table('pedidos')->select('id')->get();
    $id_metodo_pago = DB::table('metodo_pagos')->select('id')->get();
    return [
    	'id_pedido'=> $id_pedido->random()->id,
        'id_metodo_pago' => $id_metodo_pago->random()->id
        //
    ];
});
