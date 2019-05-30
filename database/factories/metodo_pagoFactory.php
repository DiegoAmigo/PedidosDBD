<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'pago_entrega'=> $faker->boolean($chanceOfGettingTrue = 50),
    	'pago_tarjeta'=> $faker->boolean($chanceOfGettingTrue = 50),
    	'numero_tarjeta'=>$faker->creditCardNumber,
    	'fecha_vencimiento'=>$faker->creditCardExpirationDate,
    	'digitos_verificadores' => $faker->numberBetween($min = 0, $max = 9999)

        //
    ];
});
