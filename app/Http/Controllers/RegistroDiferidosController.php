<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceivedDiferidos;
use Illuminate\Http\Request;
use App\TipoCredito;
use App\Tematica;
use App\ExtensionCi;
use App\RegistroCreditosDiferidos;
use App\TipoIdentificacion;
use Carbon\Carbon;



class RegistroDiferidosController extends Controller
{
     public function index()
     {
          $creditos = TipoCredito::All();
          $tematicas = Tematica::All();
          $expendidos = ExtensionCi::All();
          $identificaciones = TipoIdentificacion::All();
          return view('web.registro-diferidos.index')->with(compact('creditos', 'tematicas', 'expendidos', 'identificaciones'));
     }

     public function store(Request $request)
     {
          $msg = request()->validate([
               'nombre' => 'required',
               'apellido' => 'nullable',
               'identificacion' => 'required',
               'num_telf' => 'required',
               'email' => 'required',
               'ciudad' => 'required',
               'direccion_consumidor' => 'required',
               'nombre_oficial' => 'required',
               'descripcion' => 'required',
               'id_ext' => 'required',
               'ctcre' => 'required',
               'ctidn' => 'required',
               'id_tematica' => 'required'
               /* 'g-recaptcha-response' => 'required|recaptcha' */
          ], [
               'name.required' => ('El nombre es obligatorio'),
               'g-recaptcha-response' => ('Verifique que es un humano')
          ]);

          $now = Carbon::now();
          $formulario = new RegistroCreditosDiferidos();
          $formulario->nombre = $request->input('nombre');
          $formulario->apellido = $request->input('apellido');
          $formulario->identificacion = $request->input('identificacion');
          $formulario->num_telf = $request->input('num_telf');
          $formulario->email = $request->input('email');
          $formulario->ciudad = $request->input('ciudad');
          $formulario->direccion_consumidor = $request->input('direccion_consumidor');
          $formulario->nombre_oficial = $request->input('nombre_oficial');
          $formulario->descripcion = $request->input('descripcion');
          $formulario->gestion_reclamo = $now->year;
          $formulario->fecha_reclamo = $now->format('Y-m-d');
          $formulario->id_ext = $request->input('id_ext');
          $formulario->ctcre = $request->input('ctcre');
          $formulario->id_tematica = $request->input('id_tematica');
          $formulario->ctidn = $request->input('ctidn');
          $formulario->codigo = $this->correlativo();
          $formulario->save();
          if ($formulario->save()) {
               /*info@sanmartin.com.bo*/
               $emails = ['info@sanmartin.com.bo','jcardozo@sanmartin.com.bo', $request->input('email')];
               Mail::to($emails)->send(new MessageReceivedDiferidos($msg));
               alert()->success('Notificación', 'Estimado Soci@ se envio correctamente su reclamo');
               return view('web.Educacion.index');
          }
     }

     public function correlativo()
     {
          $existe = RegistroCreditosDiferidos::count();
          if ($existe > 0) {
               $codigo = RegistroCreditosDiferidos::orderBy('id_reg', 'ASC')->get();
               $codigofinal = $codigo->last()->codigo;
               return ++$codigofinal;
          } else {
               return 1;
          }
     }
}
