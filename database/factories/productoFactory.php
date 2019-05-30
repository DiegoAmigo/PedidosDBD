<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'cantidad' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
