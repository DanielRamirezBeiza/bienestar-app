<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
    //Validacion
    $request->validate([
        'rut' => 'required|string|max:12|min:8',
        'password'=> 'required',
    ]);

    //enviar un mensaje personalizado si no se cumple una condición con el back
    if(!auth()->attempt($request->only('rut', 'password'))){
        return back()->with('mensaje', 'credenciales incorrectas');
    }

    return redirect()->route('testpost-index', auth()->user()->username);
    }
}
