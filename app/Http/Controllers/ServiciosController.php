<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function otorgacion_creditos()
    {
        return view('web.Servicios.otorgacion_creditos');
    }
    public function certificados_aportacion()
    {
        return view('web.Servicios.certificados_aportacion');
    }
    public function cambio_divisas()
    {
        return view('web.Servicios.cambio_divisas');
    }
}
