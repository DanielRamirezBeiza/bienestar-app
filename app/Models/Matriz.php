<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriz extends Model
{
    /** @use HasFactory<\Database\Factories\MatrizFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'rut',
        'estadoAfiliacion',
    ];
}
