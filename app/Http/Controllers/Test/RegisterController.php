<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        dd('post');
    }
}
