<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //nombre de la tabla
    protected $table='menus';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre', 'precio', 'descuento', 'descripcion'
    ];
    
}
