<?php

use Illuminate\Database\Seeder;

class menu_pedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Menu_Pedido', 20)->create();
    }
}
