<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtensionCi extends Model
{
    protected $table='ci_ext';
	protected $primaryKey='id_ext';
	public $timestamps=true;

	protected $fillable=[
		'nombre'
	];
}
