<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locals';

    protected $fillable = ['valor_entrega', 'direccion_local', 'tiempo_despacho', 'tiempo_retiro', 'aprobado', 'cadena', 'nombre_local'];

    public function mesas(){

        return $this->hasMany('App\Mesa');

    }
}
