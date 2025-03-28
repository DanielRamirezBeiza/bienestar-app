<?php

namespace App\Imports;

use App\Models\Matriz;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatrizImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Matriz([
            //
            'nombre' =>$row['username'],
            'rut'=>$row['rut'],
            'estadoAfiliacion' => $row['estadoAfiliacion']
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize()): int
    {
        return 1000;
    }
}
