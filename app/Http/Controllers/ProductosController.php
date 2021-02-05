<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function tasas()
    {
        return view('web.productos.tasas');
    }
}
