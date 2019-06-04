<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';

    protected $fillable=['gestionar_local','gestionar_locales','gestionar_plataforma','gestionar_menus'];

    public function rols(){
        
        return $this->belongsTo('App\Rol');

    }
}
