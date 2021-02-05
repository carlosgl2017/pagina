<?php

namespace App\Http\Controllers;

use App\Invitado;
use App\Socio;
use Illuminate\Http\Request;
use Alert;

class InvitadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.Educacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /*  alert()->success('Notificación', 'Estimado Soci@ finalizó el plazo de inscripción');
        return view('web.Educacion.index'); */
       return view('web.Educacion.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        /* alert()->success('Notificación', 'Estimado Soci@ finalizó el plazo de inscripción');
        return view('web.Educacion.index'); */

        $existe = Socio::where('ci', $request->input('ci'))
            ->where('fecha_nac', $request->input('fecha_nac'))
            ->count();
        if ($existe > 0) {
            $nro_socio = Socio::where('ci', $request->input('ci'))->firstOrFail()->nro_socio;
            $socio_inscrito = Invitado::where('nro_socio', $nro_socio)->where('id_evento', 3)->count(); //CHANGE ID EVENTO
            if ($socio_inscrito > 0) {
                alert()->success('Notificación', 'Estimado Soci@  ya se encuentra inscrito en el curso');
                return view('web.Educacion.index');
            } else {
                $socios = Socio::where('ci', $request->input('ci'))
                    ->where('fecha_nac', $request->input('fecha_nac'))
                    ->get();
                return view('web.Educacion.registro')->with(compact('socios'));
            }
        } else {
            alert()->warning('Notificación', 'No se encontraron sus datos revise que sus datos sean correctos');
            return view('web.Educacion.create');
        } 
    }
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function show(Invitado $invitado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitado $invitado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $id)
    {
        /* alert()->success('Notificación', 'Estimado Soci@ finalizó el plazo de inscripción');
        return view('web.Educacion.index'); */
        $verify = Invitado::where('nro_socio', $id)->where('id_evento', 3)->count();
        if ($verify > 0) {
            alert()->success('Notificación', 'Estimado Soci@  ya se encuentra inscrito en el curso');
            return view('web.Educacion.index');
        } else {
            $inv = new Invitado();
            $inv->nro_socio = $id;
            $inv->id_evento = 3; //id del primer evento
            $inv->save(); //Guardar en tabla invitado

            $so = Socio::find($id);
            $so->celular = $request->input('celular');
            $so->save(); //metodo se encarga de ejecutar un insert sobre la tabla           

            alert()->success('Notificación', 'Estimado Soci@  Se ha inscrito correctamente al curso');
            return view('web.Educacion.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitado $invitado)
    {
        //
    }
}
