<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pedido');
            $table->integer('id_menu');
            $table->text('aclaraciones');
            $table->timestamps();

            $table->foreign('id_pedido')
            ->references('id')
            ->on('pedidos')
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
        Schema::dropIfExists('menus_pedidos');
    }
}
