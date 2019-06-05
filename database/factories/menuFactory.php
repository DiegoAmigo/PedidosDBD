<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
	$id_local = DB::table('locals')->select('id')->get();
    return [
    	'id_local' => $id_local->random()->id,
        'nombre' => $faker->text($maxNbChars = 200) ,
        'precio' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 100000),
        'descuento' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 1),
        'descripcion' => $faker->text($maxNbChars = 200)
    ];
});
