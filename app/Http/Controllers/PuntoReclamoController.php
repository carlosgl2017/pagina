<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use App\Reclamo;
use App\TipoReclamo;
use App\ExtensionCi;
use App\TipoReclamante;



class PuntoReclamoController extends Controller
{
     public function index()
     {
          return view('web.punto_reclamo.index');
     }
     public function create()
     {
          $tipo_reclamo = TipoReclamo::All();
          $ci_extension = ExtensionCi::All();
          $tipo_reclamante = TipoReclamante::All();
          return view('web.punto_reclamo.reclamo')->with(compact('tipo_reclamo', 'ci_extension', 'tipo_reclamante'));
     }
     public function store(Request $request)
     {
          $msg = request()->validate([
               'id_tipo_reclamo' => 'required',
               'name' => 'required',
               'apellidos' => 'required',
               'ci' => 'required',
               'id_tipo_reclamante' => 'required',
               'representante' => 'nullable',
               'numero_testimonio' => 'nullable',
               'direccion' => 'required',
               'email' => 'required',
               'telefono' => 'required',
               'fecha' => 'required|date',
               'monto_comprometido' => 'required',
               'departamento' => 'required',
               'descripcion' => 'required',
               'id_ext' => 'nullable',
               'g-recaptcha-response' => 'required|recaptcha'
          ], [
               'name.required' => ('El nombre es obligatorio'),
               'g-recaptcha-response' => ('Verifique que es un humano')
          ]);

          $reclamo = new Reclamo();
          $reclamo->nombres = $request->input('name');
          $reclamo->apellidos = $request->input('apellidos');
          $reclamo->ci = $request->input('ci');
          $reclamo->nombre_rep_legal = $request->input('representante');
          $reclamo->numero_testimonio = $request->input('numero_testimonio');
          $reclamo->direccion = $request->input('direccion');
          $reclamo->email = $request->input('email');
          $reclamo->celular = $request->input('telefono');
          $reclamo->fecha_reclamo = $request->input('fecha');
          $reclamo->monto = $request->input('monto_comprometido');
          $reclamo->origen_reclamo = $request->input('departamento');
          $reclamo->descripcion = $request->input('descripcion');
          $reclamo->codigo = $this->correlativo();
          $reclamo->id_ext = $request->input('id_ext');
          $reclamo->id_tipo_reclamante = $request->input('id_tipo_reclamante');
          $reclamo->id_tipo_reclamo = $request->input('id_tipo_reclamo');
          $reclamo->save();
          if ($reclamo->save()) {
               /*info@sanmartin.com.bo*/
               $emails = ['info@sanmartin.com.bo','jcardozo@sanmartin.com.bo', $request->input('email')];
               Mail::to($emails)->send(new MessageReceived($msg));
               alert()->success('Notificación', 'Estimado Soci@ se envio correctamente su reclamo');
               return view('web.Educacion.index');
          }
     }


     public function correlativo()
     {
          $existe = Reclamo::count();
          if ($existe > 0) {
               $codigo = Reclamo::orderBy('id_reclamo', 'ASC')->get();
               $codigofinal = $codigo->last()->codigo;
               return ++$codigofinal;
          } else {
               return 1;
          }
     }
}
