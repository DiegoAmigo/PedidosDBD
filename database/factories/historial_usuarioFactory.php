<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Historial_usuario;
use Faker\Generator as Faker;

$factory->define(Historial_usuario::class, function (Faker $faker) {
    $id_usuario = DB::table('usuarios')->select('id')->get();
    return [
    	'accion'=>$faker->text($maxNbChars= 200),
    	'fecha'=> $faker->dateTimeBetween($startDate='-3 weeks',$endDate='now', $timezone = null),
        'hora'=> $faker->time($format = 'H:i:s', $max= 'now'),
        'id_usuario'=> $id_usuario->random()->id
        //
    ];
});
