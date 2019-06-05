<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //nombre de la tabla
    protected $table='horarios';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'dia', 'apertura', 'cierre'
    ];
    
    public function local(){
        return $this->belongsTo('App\Local','id_local');
    }
}
