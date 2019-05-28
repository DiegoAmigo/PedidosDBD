<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mesa;
use Faker\Generator as Faker;

$factory->define(Mesa::class, function (Faker $faker) {
    $id_local= DB::table('locals')->select('id')->get();
    return [
        'id_local'=>$id_local->random()->id,
        'cantidad_puestos'=> $faker->numberBetween($min = 1, $max=12),
        'numero_mesa'=> $faker->numberBetween($min=1, $max=50),
    ];
});
