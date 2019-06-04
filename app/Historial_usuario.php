<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_usuario extends Model
{
	protected $table = 'historial_usuarios';

    protected $fillable=['accion','fecha','hora'];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
    
}
