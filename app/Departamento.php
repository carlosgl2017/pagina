<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $primaryKey='id_departamento';
    protected $fillable=['nombre_departamento'];

    public function departamentos()
    {
        return $this->hasMany('App\Remate','id_remate');
    }
}
