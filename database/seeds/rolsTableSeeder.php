<?php

use Illuminate\Database\Seeder;

class rolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rol::class, 20)->create();
    }
}
