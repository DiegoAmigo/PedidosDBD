<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    $id_usuario = DB::table('usuarios')->select('id')->get();
    return [
        'id_usuario'=>$id_usuario->random()->id,
        'fecha'=>$faker->dateTimeBetween($startDate= 'now', $endDate= '+10 weeks', $timezone = NULL),
        'total_precio'=>$faker->randomFloat($nbMaxDecimals = 2, $min=0, $max=9999999),
        'notas_adicionales'=>$faker->text($maxNbChars= 200),
    ];
});
