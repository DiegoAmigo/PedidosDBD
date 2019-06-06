<?php

use Illuminate\Database\Seeder;

class menuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Menu', 20)->create();
    }
}
