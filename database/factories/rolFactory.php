<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {

    return [
        'tipo_rol'=>$faker->randomElement(['Administrador','Administrador de local','Usuario']),

    ];
});
