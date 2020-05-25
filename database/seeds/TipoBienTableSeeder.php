<?php

use Illuminate\Database\Seeder;
use App\TipoBien;
class TipoBienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoBien::create([
            'tipo' => 'Mueble',
            'condicion' => true
        ]);
        TipoBien::create([
            'tipo' => 'Inmueble',
            'condicion' => true
        ]);        
    }
}
