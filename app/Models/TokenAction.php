<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TokenAction extends Model
{
    //
    protected $fillable = ['token', 'action', 'data'];
}
