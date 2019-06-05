<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Pedido extends Model
{
    
    protected $table = 'menus_pedido';
    protected $fillable =[ 'id_pedido', 'id_menu','aclaraciones'];

    public function pedidos(){
            return $this->belongsTo(Pedido::class, 'id_pedido');

    }

    public function menus(){
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
