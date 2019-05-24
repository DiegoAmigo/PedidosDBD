<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->date($format= 'm-d', $max= 'now'),
        'total_precio'=>$faker->randomFloat($nbMaxDecimals = 2, $min=0, $max=9999999),
        'notas_adicionales'=>$faker->text($maxNbChars= 200),
    ];
});
