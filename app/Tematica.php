<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    protected $table = 'tematica';
    protected $primaryKey = 'id_tematica';
    public $timestamps = true;
    protected $fillable = [
        'nombre'
    ];
}
