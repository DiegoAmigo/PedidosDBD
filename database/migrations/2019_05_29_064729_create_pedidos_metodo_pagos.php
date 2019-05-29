<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosMetodoPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_metodo_pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pedido');
            $table->integer('id_metodo_pago');
            $table->timestamps();

            $table->foreign('id_pedido')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');

            $table->foreign('id_metodo_pago')
                ->references('id')
                ->on('metodo_pagos')
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
        Schema::dropIfExists('pedidos_metodo_pagos');
    }
}
