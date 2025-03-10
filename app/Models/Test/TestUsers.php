<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TestUsers extends Model
{
    //
    protected $fillable = [
            'name',
            'email',
            'password',
            'rut',
        ];
    
}