<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table='socio';
    protected $primaryKey='nro_socio';
    public $timestamps=true;
    protected $fillable=[
        'nro_socio',
        'nombre',
        'ci',
        'fecha_nac'
            ];
}
