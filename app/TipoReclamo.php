<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoReclamo extends Model
{
    protected $table='tipo_reclamo';
	protected $primaryKey='id_tipo_reclamo';
	public $timestamps=true;

	protected $fillable=[
		'tipo_reclamo'
	];
}
