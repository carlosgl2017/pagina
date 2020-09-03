<?php

use Illuminate\Database\Seeder;
use App\Evento;
class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'nombre_evento' => 'Curso Rol de la ASFI y Derechos y obligaciones del consumidor',
            'fecha_evento' => '17-08-2020',
            'hora_evento' => '17:00',
            'descripcion' => 'Expositores del curso: Lic. Limber Mogro Pereira',
            'ubicacion' => 'Virtual'
        ]);
    }
}
