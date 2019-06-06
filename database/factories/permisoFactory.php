<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    $id_rol= DB::table('rols')->select('id')->get();
    $gestionar_local = $faker->boolean($chanceOfGettingTrue = 20);
    $gestionar_locales = $faker->boolean($chanceOfGettingTrue = 30);
    $gestionar_plataforma = $faker->boolean($chanceOfGettingTrue = 10);
    $gestionar_menus = $faker->boolean($chanceOfGettingTrue = 20);
    if($gestionar_local == true || $gestionar_menus == true){
        $gestionar_locales = false;
        $gestionar_plataforma = false;
    }
    if($gestionar_locales == true || $gestionar_plataforma == true){
        $gestionar_local = false;
        $gestionar_menus = false;
    }
    return [
        'gestionar_local'=>$gestionar_local,
        'gestionar_locales'=>$gestionar_locales,
        'gestionar_plataforma'=>$gestionar_plataforma,
        'gestionar_menus'=>$gestionar_menus,

    ];
});
