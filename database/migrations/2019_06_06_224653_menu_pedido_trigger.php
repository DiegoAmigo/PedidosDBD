<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuPedidoTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION actualizador_precio()
            RETURNS TRIGGER AS 
            $$
            DECLARE
                
            BEGIN
                 
                
                update pedidos set total_precio = pe.suma 
from (SELECT sum(m.precio) as suma, p.id as id_pedido
FROM  menus m, menus_pedidos mp, pedidos p
where m.id = mp.id_menu AND p.id = mp.id_pedido
group by p.id) as pe
where pedidos.id = pe.id_pedido;
                RETURN NULL;
            END
                $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER actualizar_pagar AFTER INSERT ON menus_pedidos FOR EACH ROW
        EXECUTE PROCEDURE actualizador_precio();
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
