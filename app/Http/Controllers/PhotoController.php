<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remate;
use Image;
use File;
use Illuminate\Support\Facades\Input;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $photos = Photo::All();
        return view('remate.index')->with(compact('remates'));
    }
  

    public function edit($id)
    {    
        return view('photo.edit')->with(compact('id')); //formulario de registro
    }
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'photo' => 'image|2048',
        ]);

       $photo= request()->file('photo');
       dd($photo);

       /*
        //variable temporal       
        if (Input::hasFile('photo')) {
            $path = public_path() . '/img/remates/';
            $imagenOriginal = $request()->file('photo');
            $imagen = Image::make($imagenOriginal);
            $temp_name = uniqid() . '.' . $imagenOriginal->getClientOriginalExtension();
            $imagen->resize(800, 600);

            $photo = Photo::findOrFail($id);
            $photo->id_remate = $id;
            $anterior_file = $photo->archivo;
            $photo->archivo = $temp_name;
            $photo->update(); //metodo se encarga de ejecutar un insert sobre la tabla
            if ($photo->save()) {
            //mover nuevo archivo al directorio
                $imagen->save($path . $temp_name, 100);
            //eliminar archivo antiguo del directorio
                $direccion = public_path() . '/img/photo/' . $anterior_file;
                $deleted = File::delete($direccion);
            }
            $photo = Photo::findOrFail($id);
            $photo->id_remate = $id;
            $photo->update();
        }      

        $notification = 'Exelente sus fotos subidas';
        return redirect('remate')->with(compact('notification'));

        */
       
    }
    public function destroy($id)
    {
       $foto=Foto::find($id); 
      $direccion=public_path().'/images/fotos/'.$foto->archivo;
      $deleted=File::delete($direccion);
      $foto->delete(); //delete
      $notification= 'Exelente la fotografía se elimino correctamente'; 
      return back()->with(compact('notification'));
    }
}
