<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->firstName,
        'apellido'=>$faker->lastName,
        'email'=>$faker->email,
        'contrasena'=>$faker->password,
        'calle'=>$faker->address,
    ];
});
