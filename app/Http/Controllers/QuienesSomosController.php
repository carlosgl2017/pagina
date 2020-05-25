<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class QuienesSomosController extends Controller
{
    public function mision_vision()
    {
        return view('web.QuienesSomos.mision_vision');
    }
    public function organigrama()
    {
        return view('web.QuienesSomos.organigrama');
    }
}
