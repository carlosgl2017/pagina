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
        $this->call(RolesTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(TipoReclamoTableSeeder::class);
        $this->call(TipoReclamanteTableSeeder::class);
        $this->call(ExtensionCiTableSeeder::class);
    }
}
