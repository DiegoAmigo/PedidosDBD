<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';

    protected $fillable = ['tipo_rol'];

    public function permisos (){

        return $this->hasMany('App\Permiso');

    }
}
