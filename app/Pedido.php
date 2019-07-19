<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable= ['fecha', 'total_precio', 'notas_adicionales', 'despacho'];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
