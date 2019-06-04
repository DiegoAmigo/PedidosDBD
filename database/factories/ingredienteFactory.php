<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ingrediente;
use Faker\Generator as Faker;

$factory->define(Ingrediente::class, function (Faker $faker) {
    return [
        'nombre_ingrediente'=>$faker->randomElement(['Peperoni','Salame','Pollo','Champiñones','Cebolla','Chorizo']);
        
    ];
});
