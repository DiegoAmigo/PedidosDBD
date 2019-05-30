<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Historial_usuario;
use Faker\Generator as Faker;

$factory->define(Historial_usuario::class, function (Faker $faker) {
    return [
    	'accion'=>$faker->text($maxNbChars= 200),
    	'fecha'=> $faker->dateTime($max = 'now', $timezone = null),
    	'hora'=> $faker->time($format = 'H:i:s', $max= 'now')
        //
    ];
});
