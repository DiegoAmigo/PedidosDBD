<?php

use Illuminate\Database\Seeder;

class mesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mesa::class, 500)->create();
    }
}
