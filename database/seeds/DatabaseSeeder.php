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
        $this->call(categoriaTableSeeder::class);
         //$this->call(UsersTableSeeder::class);
        $this->call(ubicacionTableSeeder::class);
        $this->call(localTableSeeder::class);
        $this->call(horarioTableSeeder::class);
        $this->call(menuTableSeeder::class);
        $this->call(productoTableSeeder::class);
        $this->call(mesaTableSeeder::class);
        $this->call(usuarioTableSeeder::class);
        $this->call(pedidoTableSeeder::class);
        $this->call(mesas_usuariosSeeder::class);
        $this->call(ingredientesTableSeeder::class);
        $this->call(rolsTableSeeder::class);
        $this->call(valoracionTableSeeder::class);
    }
}
