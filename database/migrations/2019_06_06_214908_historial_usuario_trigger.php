<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistorialUsuarioTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION proteger_datos() RETURNS TRIGGER AS $proteger_datos$
        DECLARE
        BEGIN

        RETURN NULL;
        END;
        $proteger_datos$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER proteger_datos BEFORE DELETE 
        ON historial_usuarios FOR EACH ROW 
        EXECUTE PROCEDURE proteger_datos();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
