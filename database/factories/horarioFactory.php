<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Horario;
use Faker\Generator as Faker;

$factory->define(Horario::class, function (Faker $faker) {
    return [
        'dia' => $faker->numberBetween($min = 1, $max = 7),
        'apertura' => $faker->time($format = 'H:i:s'),
        'cierre' => $faker->time($format = 'H:i:s')
    ];
});
