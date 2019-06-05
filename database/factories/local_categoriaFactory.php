<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Local_Categoria;
use Faker\Generator as Faker;

$factory->define(Local_Categoria::class, function (Faker $faker) {
    $id_local = DB::table('locals')->select('id')->get();
    $id_categoria = DB::table('categorias')->select('id')->get();
    return [
        'id_local' => $id_local->random()->id,
        'id_categoria' => $id_categoria->random()->id,
        
    ];
});
