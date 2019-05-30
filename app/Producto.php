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
    
}
