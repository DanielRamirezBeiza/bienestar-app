<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test\TestUsers;
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
            'name'=> 'required|string|max:255',
            'rut' => 'required|string|max:12|min:8',
            'email'=> 'required',
            'password'=> 'required|confirmed',
            'password_confirmation' => 'required',

        ]);

        TestUsers::create([
                'name'=> $request->name,
                'rut' => $request->rut,
                'email'=> $request->email,
                'password'=>$request->password
        ]);
    }

    public function destroy()
    {
       
    }
}
