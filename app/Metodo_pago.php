<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo_pago extends Model
{
    protected $table = 'metodo_pagos';
    protected $fillable = ['pago_entrega', 'pago_tarjeta', 'numero_tarjeta', 'fecha_vencimiento', 'digitos_verificadores'];
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }


}
