<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Metodo_pago;
use Faker\Generator as Faker;

$factory->define(Metodo_pago::class, function (Faker $faker) {
	$pago_entrega =  $faker->boolean($chanceOfGettingTrue = 50);
	if ( $pago_entrega == true)
	{
		$pago_tarjeta = false;
		$numero_tarjeta = NULL;
		$fecha_vencimiento = NULL;
		$digitos_verificadores = NULL;
	}
	else
	{
		$pago_tarjeta = true;
		$numero_tarjeta = $faker->creditCardNumber;
		$fecha_vencimiento = $faker->creditCardExpirationDate;
		$digitos_verificadores = $faker->creditCardExpirationDate;
	}
    return [
    	'pago_entrega'=> $faker->boolean($chanceOfGettingTrue = 50),
    	'pago_tarjeta'=> $pago_tarjeta,
    	'numero_tarjeta'=>$numero_tarjeta,
    	'fecha_vencimiento'=>$fecha_vencimiento,
    	'digitos_verificadores' => $faker->numberBetween($min = 0, $max = 9999)

        //
    ];
});
