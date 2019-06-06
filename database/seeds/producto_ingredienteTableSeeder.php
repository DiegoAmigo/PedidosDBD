<?php

use Illuminate\Database\Seeder;

class producto_ingredienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Producto_Ingrediente', 20)->create();
        
    }
}
