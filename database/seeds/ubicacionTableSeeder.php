<?php

use Illuminate\Database\Seeder;

class ubicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Ubicacion', 30)->create();
    }
}
