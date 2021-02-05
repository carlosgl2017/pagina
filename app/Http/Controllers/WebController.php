<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Cookie;
use Cache;

class WebController extends Controller
{
    public function index(Client $client)
    {
        $scrawler = $client->request('GET', 'https://www.bcb.gob.bo/');
        $fecha = $scrawler->filter('#accordion1')->filter('strong')->each(function ($node) {
            return $node->first()->text();
        });
        $venta_compra = $scrawler->filter('#accordion1')->filter('.tc_box02')->each(function ($node) {
            return $node->first()->text();
        });
        // Envio de cookie a la vista
        if (Cookie::has('hide_modal')) {
            session(['showModal' => false]);
        } else {
            session(['showModal' => true]);
            $cookie = Cookie::make('hide_modal', true, 240); //indica tiempo en minutos en laravel
            Cookie::queue($cookie);
        }
        /*$ufv=$scrawler->filter('#accordion1')->filter('.cotizacion-texto')->each(function ($node) {
            return $node->first()->text();
            });*/

        /*Contador de visitas begin*/
        
        /* contador de visitas ends*/
        return view('web.master')->with(compact('fecha', 'venta_compra', 'showModal'));
    }
    public function ubicacion()
    {
        return redirect('/#ubicacion');
    }
    public function incentivo()
    {
        return redirect('/#incentivos');
    }
    public function mision()
    {
        return view('web.quienes_somos.mision');
    }
}
