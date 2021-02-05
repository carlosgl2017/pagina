<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitarCreditoController extends Controller
{
    public function index()
    {
         return view('web.solicitar-credito.index');
    }

    public function ayuda()
    {
         return view('web.solicitar-credito.ayuda');
    }
}
