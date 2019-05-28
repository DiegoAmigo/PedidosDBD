<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Local;
use Faker\Generator as Faker;

$factory->define(Local::class, function (Faker $faker) {
    return [
        'valor_entrega'=> $faker->numberBetween($min = 900, $max = 5000),
        'direccion_local'=> $faker->address,
        'tiempo_despacho'=> $faker->time($format = 'H:i', $max ='now'),
        'tiempo_retiro'=> $faker->time($format = 'H:i', $max='now'),
        'aprobado'=> $faker->boolean($chanceOfGettingTrue = 50),
        'cadena'=> $faker->StreetName,
        'nombre_local'=> $faker->firstNameMale,
    ];
});
