<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroCreditosDiferidos extends Model
{
    protected $table = 'reg_cred_dif';
    protected $primaryKey = 'id_reg';
    public $timestamps = true;
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'num_telf',
        'email',
        'ciudad',
        'direccion_consumidor',
        'entidad',
        'ciudad_entidad',
        'direccion_entidad',
        'nombre_oficial',
        'descripcion',
        'id_tematica',
        'id_ext',
        'id_tcred'
    ];
}
