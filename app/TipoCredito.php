<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCredito extends Model
{
    protected $table = 'tipo_credito';
    protected $primaryKey = 'ctcre';
    public $timestamps = true;
    public $incrementing = false;
        protected $fillable = [
        'ctcre',
        'tstcr',
        'tdtcr'
    ];
}
