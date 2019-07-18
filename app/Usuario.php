<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['name', 'apellido', 'email', 'password', 'calle'];

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }

    public function ubicacion(){
        return $this->belongsTo('App\Ubicacion', 'id_ubicacion');
    }

    public function rols(){
        return $this->belongsTo('App\Rol','id_rol');
    }
}
