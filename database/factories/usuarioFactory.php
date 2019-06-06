<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    $id_ubicacion = DB::table('ubicacions')->select('id')->get();
    $id_rol = DB::table('rols')->select('id')->get();
    return [
        'nombre'=>$faker->firstName,
        'apellido'=>$faker->lastName,
        'email'=>$faker->email,
        'contrasena'=>$faker->password,
        'calle'=>$faker->address,
        'id_ubicacion'=> $id_ubicacion->random()->id,
        'id_rol'=> $id_rol->random()->id,
    ];
});
