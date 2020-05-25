<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'nombre_departamento' => 'Potosí',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Beni',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Chuquisaca',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Cochabamba',
            'condicion' => true
        ]);Departamento::create([
            'nombre_departamento' => 'La Paz',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Oruro',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Pando',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Santa Cruz',
            'condicion' => true
        ]);
        Departamento::create([
            'nombre_departamento' => 'Tarija',
            'condicion' => true
        ]);
    }
}
