<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatrizCargasCas extends Model
{
    //
    protected $fillable = [
        'id_funcionario',
        'calidad',
        'rutFuncionario',
        'nombreFuncionario',
        'nombreCarga',
        'rutCarga',
        'nacimientoCarga',
        'sexo',
        'parentesco'
    ];
}
