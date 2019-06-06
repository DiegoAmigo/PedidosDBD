<?php

use Illuminate\Database\Seeder;

class valoracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Valoracion', 20)->create();
    }
}
