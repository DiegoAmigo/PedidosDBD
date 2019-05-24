<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    return [
        'cantidad_puestos'=> $faker->numberBetween($min = 1, $max=12),
        'numero mesa'=> $faker->numberBetween($min=1, $max=50),
    ];
});
