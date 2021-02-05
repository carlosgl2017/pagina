<?php

use Illuminate\Database\Seeder;
use App\TipoIdentificacion;
class TipoIdentificacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoIdentificacion::create([            
            'ctidn' => '01',
            'tsidn' => 'C.I.',
            'tdidn' => 'CEDULA DE IDENTIDAD'
        ]);
        TipoIdentificacion::create([            
            'ctidn' => '09',
            'tsidn' => 'NIT',
            'tdidn' => 'NUMERO DE IDENTIFICACION TRIBUTARIA'
        ]);
    }
}
