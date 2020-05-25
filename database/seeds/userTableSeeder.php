<?php

use App\User;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'email' => 'admin@sanmartin.com.bo',
            'password' => bcrypt('admin'),
            'id_roles' => 1
        ]);

        User::create([
            'name' => 'Sadot Limber Arce Coila',
            'email' => 'saarco@sanmartin.com.bo',
            'password' => bcrypt('saarco99%'),
            'id_roles' => 2
        ]);

        User::create([
            'name' => 'usuario',
            'email' => 'usuario@sanmartin.com.bo',
            'password' => bcrypt('usuario'),
            'id_roles' => 3
        ]);
    }
}
