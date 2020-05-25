<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class GobiernoCorporativoController extends Controller
{
   public function electoral()
   {
       return view('web.GobiernoCorporativo.electoral');
   }
   public function comite_directorio()
   {
       return view('web.GobiernoCorporativo.comite_directorio');
   }
   public function comite_gestion_prevision()
   {
    return view('web.GobiernoCorporativo.comite_gestion_prevision');
   }
   public function comite_gestion_riesgos()
   {
    return view('web.GobiernoCorporativo.comite_gestion_riesgos');
   }
   public function comite_tecnologia()
   {
    return view('web.GobiernoCorporativo.comite_tecnologia');
   }
   public function auditoria()
   {
    return view('web.GobiernoCorporativo.auditoria');
   }
}
