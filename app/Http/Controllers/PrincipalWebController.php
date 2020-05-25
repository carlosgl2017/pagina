<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;

class PrincipalWebController extends Controller
{
   public function master(Client $client)
   {
    $scrawler=$client->request('GET','https://www.bcb.gob.bo/');    
      $scrawler->filter('#accordion1')->each(function ($node) {
      $html=$node->last()->html();
    });
     return view('web.index')->with(compact('html'));
   }
}
