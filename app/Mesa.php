<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';

    protected $fillable =['cantidad_puestos', 'numero_mesa'];

    public function local(){
        return $this->belongsTo('App\Local','id_local');
    }
}
