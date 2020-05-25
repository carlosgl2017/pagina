<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;

class ScrapingController extends Controller
{
    public function index(Client $client)
    {
      $scrawler=$client->request('GET','https://www.bcb.gob.bo/');    
      $scrawler->filter('#accordion1')->each(function ($node) {
      $html=$node->last()->html();
    });
     return $html;
    }
}
