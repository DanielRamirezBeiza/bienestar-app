<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //** Para ver toda la respuesta: dd($request);
        //** Para ver un parametro de un form dd($request->get('username'));


        //Validacion
        $request->validate([
            'name'=> 'required',
            'rut' => 'required',

        ]);
    }

    public function destroy()
    {
       
    }
}
