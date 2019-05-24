<?php

use Illuminate\Database\Seeder;

class pedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pedido::class, 50)->cerate();
    }
}
