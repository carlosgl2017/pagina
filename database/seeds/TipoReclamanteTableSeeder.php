<?php

use Illuminate\Database\Seeder;
use App\TipoReclamante;

class TipoReclamanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoReclamante::create([
            'tipo_reclamante' => 'Persona (Persona Natural)'
        ]);
        TipoReclamante::create([
            'tipo_reclamante' => 'Empresa (Persona Jurídica)'
        ]);
        TipoReclamante::create([
            'tipo_reclamante' => 'Apoderado de una Persona Natural'
        ]);
    }
}
