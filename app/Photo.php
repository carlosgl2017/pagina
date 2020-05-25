<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table='photos';
	protected $primaryKey='id_photos';
	public $timestamps=true;

	protected $fillable=[
		'direccion',
		'id_remate'
	];

}
