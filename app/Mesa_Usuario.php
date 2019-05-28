<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa_Usuario extends Model
{
    protected $table = 'mesas_usuarios';
    protected $fillable =[ 'id_mesa', 'id_usuario', 'dia', 'hora'];

    public function mesa(){
            return $this->belongsTo(Mesa::class, 'id_mesa');

    }

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
