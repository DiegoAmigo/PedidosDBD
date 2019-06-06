<?php

use Illuminate\Database\Seeder;

class local_categoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Local_Categoria', 20)->create();
        
    }
}
