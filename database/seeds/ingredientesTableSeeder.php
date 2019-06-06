<?php

use Illuminate\Database\Seeder;

class ingredientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ingrediente::class, 20)->create();
    }
}
