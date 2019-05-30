<?php

use Illuminate\Database\Seeder;

class productoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Producto', 30)->create();
    }
}
