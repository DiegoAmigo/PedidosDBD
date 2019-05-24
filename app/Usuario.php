<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'apellido', 'email', 'contrasena', 'calle'];

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
