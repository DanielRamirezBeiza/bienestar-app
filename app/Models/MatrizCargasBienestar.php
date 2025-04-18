<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatrizCargasBienestar extends Model
{
    //
    protected $fillable = [
        'nombre_funcionario',
        'rut_funcionario',
        'nombre_carga',
        'rut_carga',
        'fecha_nacimiento_carga',
        'fecha_vencimiento',
        'tipo_carga',
        'cod_parent',
        'vigencia_carga_estado',
        'vigencia_afiliacion',
    ];
}
