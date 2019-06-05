<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //nombre de la tabla
    protected $table='productos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre', 'cantidad'
    ];
    

    public function ingredientes (){

        return $this->hasMany('App\Producto_Ingrediente');

    }

    public function menu (){

        return $this->hasMany('App\Menu_Producto');

    }
}
