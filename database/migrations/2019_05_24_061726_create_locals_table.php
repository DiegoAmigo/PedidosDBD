<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_ubicacion');
            $table->double('valor_entrega', 9, 3);
            $table->string('direccion_local', 80);
            $table->time('tiempo_despacho');
            $table->time('tiempo_retiro');
            $table->boolean('aprobado');
            $table->string('cadena', 60);
            $table->string('nombre_local', 30);
            $table->timestamps();

            $table->foreign('id_ubicacion')
                    ->references('id')
                    ->on('ubicacions')
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
        Schema::dropIfExists('locals');
    }
}
