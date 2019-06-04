<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_rol');
            $table->boolean('gestionar_local');
            $table->boolean('gestionar_locales');
            $table->boolean('gestionar_plataforma');
            $table->boolean('gestionar_menus');
            $table->timestamps();


            $table->foreign('id_rol')
                    ->references('id')
                    ->on('rols')
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
        Schema::dropIfExists('permisos');
    }
}
