<?php

use Illuminate\Database\Seeder;

class localTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Local::class, 20)->create();
    }
}
