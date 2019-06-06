<?php

use Illuminate\Database\Seeder;

class pedido_metodo_pagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Pedido_Metodo_pago', 20)->create();
    }
}
