<?php

namespace App\Imports;

use App\Models\Matriz;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatrizImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       // dd($row);
        return new Matriz([
            //
            'nombre' =>$row['nombre'],
            'rut'=>$row['rut'],
            'estadoAfiliacion' => $row['estadoafiliacion'],
        ]);
    }


}
