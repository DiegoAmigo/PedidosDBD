<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodoPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('pago_entrega');
            $table->boolean('pago_tarjeta');
            $table->string('numero_tarjeta',17)->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('digitos_verificadores',4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodo_pagos');
    }
}
