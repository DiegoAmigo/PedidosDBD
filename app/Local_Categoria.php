<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local_Categoria extends Model
{
    protected $table = 'locals_categorias';
    protected $fillable =[ 'id_local', 'id_categoria'];

    public function locals(){
            return $this->belongsTo(Local::class, 'id_local');

    }

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
