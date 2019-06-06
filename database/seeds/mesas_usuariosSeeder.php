<?php

use Illuminate\Database\Seeder;

class mesas_usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mesa_Usuario::class, 20)->create();
        
    }
}
