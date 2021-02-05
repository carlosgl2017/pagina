<?php

use Illuminate\Database\Seeder;
use App\TipoReclamo;

class TipoReclamoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoReclamo::create([
            'tipo_reclamo' => 'CANJE DE MATERIAL MONETARIO'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'ATENCION AL CLIENTE'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'CHEQUE DE GERENCIA'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'ENTREGA DE BILLETE FALSO'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'FALLAS DEL SISTEMA'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'FRACCIONAMIENTO DE MATERIAL MONETARIO'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'MALA ATENCION EN VENTANILLA DE CAJAS'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'MALA INFORMACION'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'PAGO DE SERVICIOS Y OTROS'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'PRACTICAS DISCRIMINATORIAS Y ABUSIVAS'
        ]);

        TipoReclamo::create([
            'tipo_reclamo' => 'PUNTO DE RECLAMO'
        ]);

        TipoReclamo::create([
            'tipo_reclamo' => 'RESERVA Y CONFIDENCIALIDAD DE LA INFORMACIÓN'
        ]);

        TipoReclamo::create([
            'tipo_reclamo' => 'RESTITUCIÓN DE DERECHOS'
        ]);

        TipoReclamo::create([
            'tipo_reclamo' => 'TIEMPO DE ESPERA MÁXIMO EN CAJAS'
        ]);
        TipoReclamo::create([
            'tipo_reclamo' => 'TRANSACCIONES EN VENTANILLA/BOVEDAS'
        ]);
    }
}
