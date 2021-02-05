<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoReclamante extends Model
{
    protected $table='tipo_reclamante';
	protected $primaryKey='id_tipo_reclamante';
	public $timestamps=true;

	protected $fillable=[
		'tipo_reclamante'
	];
}
