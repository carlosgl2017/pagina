<?php

use Illuminate\Database\Seeder;
use App\TipoRD;
class TipordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoRD::create([
            'nombre' => 'DIFERIMIENTO'
        ]); 
        TipoRD::create([
            'nombre' => 'REPROGRAMACION'
        ]);   
    }
}
