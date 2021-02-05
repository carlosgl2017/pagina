<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRD extends Model
{
    protected $table = 'tipo_rp';
    protected $primaryKey = 'idtipord';
    public $timestamps = true;    
    public $incrementing = false;
    protected $fillable = [
        'nombre'
    ];
}
