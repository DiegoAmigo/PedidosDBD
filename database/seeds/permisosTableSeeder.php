<?php

use Illuminate\Database\Seeder;

class permisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Permiso::class, 20)->create();
    
    }
}
