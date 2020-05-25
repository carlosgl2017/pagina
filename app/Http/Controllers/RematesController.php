<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remate;

class RematesController extends Controller
{
   public function remate()
   {
      $remates=Remate::All();
     return view('web.remate.remate')->with(\compact('remates'));
   }
}
