<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
	protected $table = 'valoracions';

    protected $fillable = ['estrellas', 'comentario'];
    public function locals(){
        
        return $this->belongsTo('App\Local');

    }
    
}
