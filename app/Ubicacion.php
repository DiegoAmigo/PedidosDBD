<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //nombre de la tabla
    protected $table='ubicacions';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'pais', 'region', 'ciudad', 'comuna'
    ];
    
}
