<?php

use Illuminate\Database\Seeder;

class categoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Categoria', 30)->create();
    }
}
