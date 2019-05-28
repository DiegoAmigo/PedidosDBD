<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mesa_Usuario;
use Faker\Generator as Faker;

$factory->define(Mesa_Usuario::class, function (Faker $faker) {
    $id_mesa = DB::table('mesas')->select('id')->get();
    $id_usuario = DB::table('usuarios')->select('id')->get();
    return [
        'id_mesa'=> $id_mesa->random()->id,
        'id_usuario' => $id_usuario->random()->id,
        'dia'=> $faker->dateTimeBetween($startDate = 'now', $endDate= '+3 weeks', $timeZone = NULL),
        'hora'=> $faker->time($format = 'H:i:s', $max= 'now')
    ];
});
