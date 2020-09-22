<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;


class PuntoReclamoController extends Controller
{
public function index()
 {
      return view('web.punto_reclamo.index');
 }
public function store()
 {
   $msg= request()->validate([
    'tipo_reclamo'=>'required',
    'name'=>'required',
    'apellidos'=>'required',
    'ci'=>'required',
    'tipo'=>'required',
    'representante'=>'nullable',
    'numero_testimonio'=>'nullable',
    'direccion'=>'nullable',
    'email'=>'nullable',
    'telefono'=>'nullable',
    'fecha'=>'nullable|date',
    'monto_comprometido'=>'nullable',
    'departamento'=>'nullable',
    'descripcion'=>'nullable',
    'exp'=>'nullable'
    //'g-recaptcha-response'=>'required|recaptcha'
    ],[
    'name.required'=>('El nombre es obligatorio')
    ]);
    Mail::to('info@sanmartin.com.bo')->send(new MessageReceived($msg));
    alert()->success('Notificación', 'Estimado Soci@ se envio correctamente su reclamo');
    return view('web.Educacion.index');
    
  
 }
}
