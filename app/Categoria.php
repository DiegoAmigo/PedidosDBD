<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //nombre de la tabla
    protected $table='categorias';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre'
    ];
    /*
	public function local_categorias(){
    	return $this->hasMany('App\Local_categoria');
    }
    */
}
