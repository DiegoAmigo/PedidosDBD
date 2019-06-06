<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Local;
use Faker\Generator as Faker;

$factory->define(Local::class, function (Faker $faker) {
    $id_ubicacion = DB::table('ubicacions')->select('id')->get();
    return [
        'valor_entrega'=> $faker->numberBetween($min = 900, $max = 5000),
        'direccion_local'=> $faker->address,
        'tiempo_despacho'=> $faker->dateTimeBetween($format = 'H:i', $min = '00:00' , $max ='+60 minutes'),
        'tiempo_retiro'=> $faker->time($format = 'H:i', $max='now'),
        'aprobado'=> $faker->boolean($chanceOfGettingTrue = 50),
        'cadena'=> $faker->StreetName,
        'nombre_local'=> $faker->firstNameMale,
        'id_ubicacion'=> $id_ubicacion->random()->id
    ];
});
