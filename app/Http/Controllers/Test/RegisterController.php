<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test\TestUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

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
        
        //Evitar duplicados y Ruts con verificador en mayusculas
        $request->request->add(['rut'=>Str::slug($request->rut)]);


        //Validacion
        $request->validate([
            'name'=> 'required|string|max:255',
            'rut' => 'required|string|max:12|min:8',
            'email'=> 'required',
            'password'=> 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
                'name'=> $request->name,
                'rut' => $request->rut,
                'email'=> $request->email,
                'password'=> Hash::make($request->password)
            ]);
            
            auth()->attempt([
                'email'=> $request->email,
                'password'=>$request->password
            ]);

            return redirect()->route('testpost-index');
    }

    public function destroy()
    {
       
    }
}
