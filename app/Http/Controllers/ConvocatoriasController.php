<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvocatoriasController extends Controller
{
   public function asambleas()
   {
       return view('web.Convocatoria.asambleas');
   }   
   public function licitaciones()
   {
       return view('web.Convocatoria.licitaciones');
   }
   public function aseguradoras()
   {
       return view('web.Convocatoria.aseguradoras');
   }
   public function requerimiento()
   {
       return view('web.Convocatoria.requerimiento');
   }
    public function comunicado()
   {
       return view('web.Convocatoria.comunicados');
   }
}
