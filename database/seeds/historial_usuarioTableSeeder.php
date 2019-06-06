<?php

use Illuminate\Database\Seeder;

class historial_usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Historial_usuario', 20)->create();
    }
}
