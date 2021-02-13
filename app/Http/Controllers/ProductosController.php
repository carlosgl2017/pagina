<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function tasas_activas()
    {
        return view('web.productos.tasas-activas');
    }
    public function tasas_pasivas()
    {
        return view('web.productos.tasas-pasivas');
    }
}
