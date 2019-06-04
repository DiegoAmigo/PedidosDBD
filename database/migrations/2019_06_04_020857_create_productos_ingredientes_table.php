<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_ingredientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_producto');
            $table->integer('id_ingrediente');
            $table->timestamps();

            $table->foreign('id_producto')
                    ->references('id')
                    ->on('productos')
                    ->onDelete('cascade');

            $table->foreign('id_ingrediente')
                    ->references('id')
                    ->on('ingredientes')
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
        Schema::dropIfExists('productos_ingredientes');
    }
}
