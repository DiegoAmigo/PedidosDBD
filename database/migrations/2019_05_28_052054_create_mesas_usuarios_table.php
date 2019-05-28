<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_mesa');
            $table->integer('id_usuario');
            $table->date('dia');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('id_mesa')
                ->references('id')
                ->on('mesas')
                ->onDelete('cascade');

            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios')
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
        Schema::dropIfExists('mesas_usuarios');
    }
}
