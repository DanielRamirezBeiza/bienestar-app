<?php

namespace App\Imports;

use App\Models\MatrizCargasBienestar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class MatrizCargasBienestarImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new MatrizCargasBienestar([
            //
            'nombre_funcionario' => trim(($row['nombre'] ?? '') . ' ' . ($row['apellido_paterno'] ?? '') . ' ' . ($row['apellido_materno'] ?? '')) ?: 'sin informacion',
            'rut_funcionario' => trim($row['rut_funcionario'] ?? 'sin informacion'),
            'nombre_carga' => trim($row['nombre'] ?? 'sin informacion'),
            'rut_carga' => trim($row['rutcar'] ?? 'sin informacion'),
            'fecha_nacimiento_carga' => trim($row['fecha_nacimiento'] ?? 'sin informacion'),
            'fecha_vencimiento' => trim($row['fecha_vencimiento'] ?? 'sin informacion'),
            'tipo_carga' => trim($row['tipo_carga'] ?? 'sin informacion'),
            'cod_parent' => trim($row['codparent'] ?? 'sin informacion'),
            'vigencia_carga_estado' => trim($row['vigencia_carga'] ?? 'sin informacion'),
            'vigencia_afiliacion' => trim($row['estado'] ?? 'sin informacion'),
        ]);
    }
}
