<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table  = 'ingredientes';

    protected $fillable = ['nombre_ingrediente'];

    public function productos (){
        
        return $this->belongsToMany('App\Producto');

    }
}
