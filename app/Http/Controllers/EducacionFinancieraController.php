<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducacionFinancieraController extends Controller
{
 public function programa_educacion()
 {
   return view('web.Educacion.programa_educacion');
 }
 

 public function derechos_obligaciones()
 {
   return view('web.Educacion.derechos_obligaciones');
 }
 public function responsabilidad_social()
 {
   return view('web.Educacion.responsabilidad_social');
 }
 public function liderazgo()
 {
   return view('web.Educacion.liderazgo');
 }
 public function multimedia()
 {
   return view('web.Educacion.multimedia');
 }
}
