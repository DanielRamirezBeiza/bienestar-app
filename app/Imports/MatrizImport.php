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
            'estadoAfiliacion' => $row['estadoAfiliacion'],
        ]);
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Solo para ver si entra aquí: usa Log
            \Log::info('Fila importada:', $row->toArray());

            // Aquí deberías procesar los datos, por ejemplo guardar:
            Matriz::create([
            'nombre' =>$row['nombre'],
            'rut'=>$row['rut'],
            'estadoAfiliacion' => $row['estadoAfiliacion']
             ]);
        }
    }

}
