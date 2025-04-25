<?php

namespace App\Imports;

use App\Models\MatrizCargasCas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatrizCargasCasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MatrizCargasCas([
            //
            'id_funcionario' => trim($row['ID FUNCIONARIO'] ?? 'sin información'),
            'calidad' =>trim($row['CALIDAD']?? 'sin información'),
            'rutFuncionario' =>trim($row['RUT']?? 'sin información'),
            'nombreFuncionario' => trim(($row['NOMBRES'] ?? '') . ' ' . ($row['APELLIDOS'] ?? '') ?: 'sin informacion'),
            'nombreCarga' =>trim($row['NOMBRE CARGA'] ?? 'sin información'),
            'rutCarga'=>trim($row['RUT CARGA'] ?? 'sin información'),
            'nacimientoCarga' =>trim($row['FECHA NACIMIENTO'] ?? 'sin información'),
            'sexo' =>trim($row['SEXO'] ?? 'sin información'),
            'parentesco' =>trim($row['PARENTESCO'] ?? 'sin información'),
            ]);
    }
}
