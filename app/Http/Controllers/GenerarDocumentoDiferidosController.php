<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\TipoRD;
use App\GenerarDocumentoDiferidos;
use App\Prestatario;
use Carbon\Carbon;

class GenerarDocumentoDiferidosController extends Controller
{
   public function index()
   {
      $tipord = TipoRD::all();
      return view('web.generar-documento.index')->with(compact('tipord'));
   }

   public function solicitud()
   {
      $pdf = PDF::loadView('web.generar-documento.solicitud');
      $pdf->setPaper('legal');
      return $pdf->stream();
   }

   public function store(Request $request)
   {
      request()->validate([
         'idtipord' => 'required',
         'nprestamo' => 'required'
       /*   ,
         'g-recaptcha-response' => 'required|recaptcha' */
      ], [
         'g-recaptcha-response' => ('Verifique que es un humano')
      ]);

      $existe=Prestatario::where('nro_prestamo',$request->input('nprestamo'))->exists();
      if($existe)
      {       
         $prestatario=Prestatario::where('nro_prestamo',$request->input('nprestamo'))->firstOrFail();
         $gene = new GenerarDocumentoDiferidos();
         $gene->codigo = $this->correlativo();
         $gene->idtipord = $request->input('idtipord');
         $gene->nro_prestamo = $prestatario->nro_prestamo;
         $gene->save(); //metodo se encarga de ejecutar un insert sobre la tabla

         $fecha=Carbon::now();
         /* Generar pdf begin*/         
         $pdf = PDF::loadView('web.generar-documento.solicitud',['prestatario'=>$prestatario,'fecha'=>$fecha,'codigo'=>$this->correlativo()-1]);
         $pdf->setPaper('Letter');
         return $pdf->download();
         /* generar pdf ends */
      }else{
         alert()->success('Notificación', 'No se encontro registros con los datos ingresados');
        return redirect('web/generar-documento/index');
      }
     
   }

   public function correlativo()
   {
      $existe = GenerarDocumentoDiferidos::count();
      if ($existe > 0) {
         $codigo = GenerarDocumentoDiferidos::orderBy('id_registro', 'ASC')->get();
         $codigofinal = $codigo->last()->codigo;
         return ++$codigofinal;
      } else {
         return 1;
      }
   }
}
