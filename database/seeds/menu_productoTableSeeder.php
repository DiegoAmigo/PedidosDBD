<?php

use Illuminate\Database\Seeder;

class menu_productoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Menu_Producto', 20)->create();
    }
}
