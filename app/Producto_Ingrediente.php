<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_Ingrediente extends Model
{
    protected $table = 'productos_ingredientes';
    protected $fillable =[ 'id_producto', 'id_ingrediente'];

    public function productos(){
            return $this->belongsTo(Producto::class, 'id_producto');

    }

    public function ingredientes(){
        return $this->belongsTo(Ingrediente::class, 'id_ingrediente');
    }
}
