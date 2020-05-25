<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Remate;
use DB;
use Illuminate\Http\Request;

class RemateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $remates = DB::table('remates')
            ->join('departamentos', 'remates.id_departamento', '=', 'departamentos.id_departamento')
            ->select('remates.*', 'departamentos.nombre_departamento')
            ->get();
        return view('remate.index')->with(compact('remates'));
    }
    public function create()
    {
        $remates = Remate::All();
        $departamentos = Departamento::All();
        return view('remate.create')->with(compact('remates', 'departamentos'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'lugar' => 'string|required',
            'juzgado' => 'string|required',
            'fecha_subasta' => 'date|required',
            'hora' => 'date_format:H:i|nullable',
            'descripcion_bien' => 'string|required',
            'monto' => 'numeric|required',
            'nombre_martillero' => 'string|nullable'
        ]);
        $remate = new Remate();
        $remate->lugar = $request->input('lugar');
        $remate->juzgado = $request->input('juzgado');
        $remate->fecha_subasta = $request->input('fecha_subasta');
        $remate->hora = $request->input('hora');
        $remate->descripcion_bien = $request->input('descripcion_bien');
        $remate->monto = $request->input('monto');
        $remate->nombre_martillero = $request->input('nombre_martillero');
        $remate->condicion = true;
        $remate->id_departamento = $request->input('id_departamento');
        $remate->save(); //metodo se encarga de ejecutar un insert sobre la tabla
        $notification = 'Exelente sus datos  se añadieron correctamente';
        return redirect('/remate')->with(compact('notification'));
    }

    public function edit($id)
    {
        $remate = Remate::find($id);
        $departamentos = Departamento::All();       
        return view('remate.edit')->with(compact('remate', 'departamentos')); //formulario de registro
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'lugar' => 'string|required',
            'juzgado' => 'string|required',
            'fecha_subasta' => 'date|required',
            'descripcion_bien' => 'string|required',
            'monto' => 'numeric|required',
            'nombre_martillero' => 'string|nullable'
        ]);

        $remate = Remate::find($id);
        $remate->lugar = $request->input('lugar');
        $remate->juzgado = $request->input('juzgado');
        $remate->fecha_subasta = $request->input('fecha_subasta');
        $remate->hora = $request->input('hora');
        $remate->descripcion_bien = $request->input('descripcion_bien');
        $remate->monto = $request->input('monto');
        $remate->nombre_martillero = $request->input('nombre_martillero');
        $remate->condicion = true;
        $remate->id_departamento = $request->input('id_departamento');
        $remate->save(); //metodo se encarga de ejecutar un insert sobre la tabla
        $notification = 'Exelente sus datos  se modificaron correctamente';
        return redirect('/remate')->with(compact('notification'));        
       
    }
    public function destroy($id)
    {
        $remate = Remate::findOrFail($id);
        Remate::destroy($id);
        return back();
    }

/*  project vue
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
 */
}
