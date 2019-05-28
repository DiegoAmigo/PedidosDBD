<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('id_ubicacion');
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->string('email', 45);
            $table->char('contrasena', 32);
            $table->string('calle', 80);
            $table->timestamps();

            /*$table->foreign('id_ubicacion')
                ->references('id')
                ->on('ubicacion')
                ->onDelete('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
