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
    
    public function local(){
        return $this->belongsTo('App\Local','id_local');
    }

    public function pedido(){

        return $this->hasMany('App\Menu_Pedido');

    }

    public function producto(){

        return $this->hasMany('App\Menu_Producto');

    }
}
