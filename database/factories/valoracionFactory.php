<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Valoracion;
use Faker\Generator as Faker;

$factory->define(Valoracion::class, function (Faker $faker) {
    $id_local= DB::table('locals')->select('id')->get();
    return [
    	'estrellas' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 5),
        'comentario'=>$faker->text($maxNbChars= 200),
        'id_local'=>$id_local->random()->id,
        //
    ];
});
