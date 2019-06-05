<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Producto extends Model
{
    protected $table = 'menus_productos';
    protected $fillable =[ 'id_menu', 'id_producto','seleccionable'];

    public function menus(){
            return $this->belongsTo(Menu::class, 'id_menu');

    }

    public function productos(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
