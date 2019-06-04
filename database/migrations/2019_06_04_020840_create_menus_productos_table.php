<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_producto');
            $table->integer('id_menu');
            $table->boolean('seleccionable');
            $table->timestamps();

            $table->foreign('id_producto')
                    ->references('id')
                    ->on('productos')
                    ->onDelete('cascade');
            
            $table->foreign('id_menu')
                    ->references('id')
                    ->on('menus')
                    ->onDelete('cascade');                         
           
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_productos');
    }
}
