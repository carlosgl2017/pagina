<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    protected $table = 'tipo_identificacion';
    protected $primaryKey = 'ctidn';
    public $timestamps = true;    
    public $incrementing = false;
    protected $fillable = [
        'tsidn',
        'tdidn'
    ];
}
