<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Horario;
use Faker\Generator as Faker;

$factory->define(Horario::class, function (Faker $faker) {
	$id_local = DB::table('locals')->select('id')->get();
    return [
    	'id_local' => $id_local->random()->id,
        'dia' => $faker->numberBetween($min = 1, $max = 7),
        'apertura' => $faker->time($format = 'H:i:s'),
        'cierre' => $faker->time($format = 'H:i:s')
    ];
});
