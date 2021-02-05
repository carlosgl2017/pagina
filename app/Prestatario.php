<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestatario extends Model
{
    protected $table='prestatario';
	protected $primaryKey='nro_cuenta';
	public $timestamps=true;

	protected $fillable=[
		'nro_cuenta',
		'nro_socio',
		'nombre',
		'ci',
		'moneda'
	];
}
