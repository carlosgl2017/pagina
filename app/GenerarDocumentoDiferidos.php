<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenerarDocumentoDiferidos extends Model
{
    protected $table = 'registro_solicitud';
    protected $primaryKey = 'id_registro';
    public $timestamps = true;
    protected $fillable = [
        'codigo',
        'idtipord',
        'nro_prestamo'
    ];
}
