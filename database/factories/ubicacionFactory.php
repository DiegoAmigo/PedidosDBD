<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ubicacion;
use Faker\Generator as Faker;

$factory->define(Ubicacion::class, function (Faker $faker) {
    return [
        'pais' => $faker->country,
        'region' => $faker->numberBetween($min = 1, $max = 16),
        'ciudad' => $faker->city,
        'comuna' => $faker->randomElement($array = array ('a','b','c'))
    ];
});
