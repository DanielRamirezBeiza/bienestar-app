<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarCarga extends Model
{
    /** @use HasFactory<\Database\Factories\FamiliarCargaFactory> */
    use HasFactory;

       protected $fillable = [
            'carga_nombre',
            'carga_rut',
            'beneficiario_nombre',
            'beneficiario_rut',
            'direccion',
            'cod_causal_crearCargaFamiliar',
            'certificado_parentesco',

     
    ];
}

