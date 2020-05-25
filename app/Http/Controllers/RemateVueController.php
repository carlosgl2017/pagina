<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remate;
use App\Departamento;

class RemateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $buscar = $request->buscar;
        $criterio = $request->criterio;        
        if ($buscar==''){
            $remates = Remate::orderBy('id_remate', 'desc')->paginate(10);
        }
        else{
            $remates = remate::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(10);
        }       

        return [
            'pagination' => [
                'total'        => $remates->total(),
                'current_page' => $remates->currentPage(),
                'per_page'     => $remates->perPage(),
                'last_page'    => $remates->lastPage(),
                'from'         => $remates->firstItem(),
                'to'           => $remates->lastItem(),
            ],
            'remates' => $remates
        ];
    }

    public function selectDepartamento(Request $request){
        if (!$request->ajax()) return redirect('/');
        $departamentos = Departamento::where('condicion','=','1')
        ->select('id_departamento','fecha')->orderBy('fecha', 'asc')->get();
        return ['departamentos' => $departamentos];
    }

    public function listarPdf(){
        $remates = Remate::select('lugar','juzgado','fecha_subasta','hora','descripcion_bien','monto','nombre_martillero','condicion')->orderBy('fecha', 'asc')->get();
        $cont=Remate::count();

        $pdf = \PDF::loadView('pdf.rematespdf',['remates'=>$remates,'cont'=>$cont])->setPaper('a4', 'portrait');
        return $pdf->download('remates.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $remate = new Remate();
        $remate->lugar = $request->lugar;
        $remate->juzgado = $request->juzgado;
        $remate->fecha_subasta = $request->fecha_subasta;
        $remate->hora = $request->hora;
        $remate->descripcion_bien = $request->descripcion_bien;
        $remate->monto = $request->monto;
        $remate->nombre_martillero = $request->nombre_martillero;
        $remate->condicion = '1';
        $remate->save();
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $remate = Remate::findOrFail($request->id);
        $remate->lugar = $request->lugar;
        $remate->juzgado = $request->juzgado;
        $remate->fecha_subasta = $request->fecha_subasta;
        $remate->hora = $request->hora;
        $remate->descripcion_bien = $request->descripcion_bien;
        $remate->monto = $request->monto;
        $remate->nombre_martillero = $request->nombre_martillero;
        $remate->condicion = '1';
        $remate->save();
    }

    public function desactivar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $remate = Remate::findOrFail($request->id);
        $remate->condicion = '0';
        $remate->save();
    }

    public function activar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $remate = Remate::findOrFail($request->id);
        $remate->condicion = '1';
        $remate->save();
    }


 
}
