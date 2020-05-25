<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remate extends Model
{
   protected $table='remates';
	protected $primaryKey='id_remate';
	public $timestamps=true;

	protected $fillable=[
		'lugar',
		'juzgado',
		'fecha_subasta',
		'hora',
		'descripcion_bien',
		'monto',
		'nombre_martillero',
		'condicion'
	];

   /* vue projet
   protected $primaryKey='id_remate';
   protected $fillable=['lugar','juzgado','fecha_subasta','hora','descripcion_bien','monto','nombre_martillero'];
   public function departamento(){
      return $this->belongsTo('App\Departamento','id_departamento');
   }*/
}
