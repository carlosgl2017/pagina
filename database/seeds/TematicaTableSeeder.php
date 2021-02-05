<?php

use Illuminate\Database\Seeder;
use App\Tematica;

class TematicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tematica::create([
            'id_tematica'=>'259',
            'nombre' => 'REFINANCIAMIENTO'
        ]);
        Tematica::create([
            'id_tematica'=>'260',
            'nombre' => 'REPROGRAMACION'
        ]);
        Tematica::create([
            'id_tematica'=>'261',
            'nombre' => 'PERIODO DE GRACIA'
        ]);
        Tematica::create([
            'id_tematica'=>'255',
            'nombre' => 'COBRO DE INTERESES DIFERIDOS'
        ]);
        Tematica::create([
            'id_tematica'=>'262',
            'nombre' => 'COBROS DE SEGUROS'
        ]);
        Tematica::create([
            'id_tematica'=>'263',
            'nombre' => 'COBROS ADICIONALES POR TARJETA DE CREDITO'
        ]);
        Tematica::create([
            'id_tematica'=>'264',
            'nombre' => 'DESCONOCIMIENTO DE LA NORMATIVA VIGENTE'
        ]);

        Tematica::create([
            'id_tematica'=>'265',
            'nombre' => 'ATENCION DEL PERSONAL DE LA ENTIDAD'
        ]);
        Tematica::create([
            'id_tematica'=>'258',
            'nombre' => 'OTROS'
        ]);        
    }
}
