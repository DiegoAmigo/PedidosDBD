<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_Metodo_pago extends Model
{
	protected $table = 'pedidos_metodo_pagos';
    protected $fillable =[ 'id_pedido', 'id_metodo_pago'];
    public function pedido(){
            return $this->belongsTo(Mesa::class, 'id_pedido');

    }

    public function metodo_pago(){
        return $this->belongsTo(Usuario::class, 'id_metodo_pago');
    }
    
}
