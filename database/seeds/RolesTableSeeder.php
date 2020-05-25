<?php

use Illuminate\Database\Seeder;
use App\Roles;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'rol' => 'administrador'
        ]);
        Roles::create([
            'rol' => 'moderador'
        ]);
        Roles::create([
            'rol' => 'usuario'
        ]);
    }
}
