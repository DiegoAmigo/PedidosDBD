<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    $id_rol= DB::table('rols')->select('id')->get();
    return [
        'gestionar_local'=>$faker->boolean($chanceOfGettingTrue = 20),
        'gestionar_locales'=>$faker->boolean($chanceOfGettingTrue = 30),
        'gestionar_plataforma'=>$faker->boolean($chanceOfGettingTrue = 10),
        'gestionar_menus'=>$faker->boolean($chanceOfGettingTrue = 30),
        
    ];
});
