<?php

use Illuminate\Database\Seeder;
use App\TipoCredito;

class TipoCreditoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCredito::create([
            'ctcre' => 'N0',
            'tstcr' => 'CRED.CONSUMO',
            'tdtcr' => 'CREDITO DE CONSUMO'
        ]);

        TipoCredito::create([
            'ctcre' => 'N1',
            'tstcr' => 'CONSUMO DEB.GAR',
            'tdtcr' => 'CREDITO DE CONSUMO DEBIDAMENTE GARANTIZADO'
        ]);

        TipoCredito::create([
            'ctcre' => 'N2',
            'tstcr' => 'CONSUMO DG. CGR',
            'tdtcr' => 'CREDITO CONSUMO DEB.GARANTIZADO CON GARANTIA REAL'
        ]);

        TipoCredito::create([
            'ctcre' => 'M1',
            'tstcr' => 'MICRO.IND. DG',
            'tdtcr' => 'MICROCREDITO INDIVIDUAL DEBIDAMENTE GARANTIZADO'
        ]);

        TipoCredito::create([
            'ctcre' => 'M2',
            'tstcr' => 'MICRO.IND.DG.CGR',
            'tdtcr' => 'MICROCREDITO IND.DEBIDAMENTE GARANTIZADO GARANTIA REAL'
        ]);

        TipoCredito::create([
            'ctcre' => 'H0',
            'tstcr' => 'HIP.VIVIENDA',
            'tdtcr' => 'CREDITO HIPOTECARIO DE VIVIENDA'
        ]);

        TipoCredito::create([
            'ctcre' => 'H1',
            'tstcr' => 'CRED. VIVSIN GAR',
            'tdtcr' => 'CREDITO DE VIVIENDA SIN GARANTIA HIPOTECARIA'
        ]);

    }
}
