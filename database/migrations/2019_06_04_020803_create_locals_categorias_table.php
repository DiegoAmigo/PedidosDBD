<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals_categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_local');
            $table->integer('id_categoria');
            $table->timestamps();

            $table->foreign('id_local')
            ->references('id')
            ->on('locals')
            ->onDelete('cascade');

        $table->foreign('id_categoria')
            ->references('id')
            ->on('categorias')
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
        Schema::dropIfExists('locals_categorias');
    }
}
