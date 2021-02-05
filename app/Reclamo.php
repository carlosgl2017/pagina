<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    protected $table = 'reclamo';
    protected $primaryKey = 'id_reclamo';
    public $timestamps = true;
    protected $fillable = [
        'nombres',
        'apellidos',
        'ci',
        'nombre_rep_legal',
        'numero_testimonio',
        'direccion',
        'email',
        'celular',
        'fecha_reclamo',
        'monto',
        'origen_reclamo',
        'descripcion',
        'codigo'
    ];
}
