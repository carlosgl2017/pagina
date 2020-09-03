<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    protected $table='invitado';
    protected $primaryKey='id_invitado';
    public $timestamps=true;
    protected $fillable=[
        'nro_socio'
            ];
}
