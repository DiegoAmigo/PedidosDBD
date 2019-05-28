<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
        $this->call(LocalTableSeeder::class);
        $this->call(mesaTableSeeder::class);
        $this->call(usuarioTableSeeder::class);
        $this->call(pedidoTableSeeder::class);
        $this->call(mesas_usuariosSeeder::class);
    }
}
