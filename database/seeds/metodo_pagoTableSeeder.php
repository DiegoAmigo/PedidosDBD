<?php

use Illuminate\Database\Seeder;

class metodo_pagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Metodo_pago::class, 50)->create();
    }
}
