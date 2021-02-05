<?php

namespace App\Http\Controllers;

class EmailController extends Controller
{
    public function index(Request $request)
    {
        $subject = "Punto de Reclamo";
        $for = "info@sanmartin.com.bo";
        Mail::send('email', $request->all(), function ($msj) use ($subject, $for) {
            $msj->from("", "NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
