<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;
use Illuminate\Support\Facades\Validator;

class TokenController extends Controller
{

     /**
     * Genera el token.
     */
    



    /**
     * Muestra el formulario vinculado a un token.
     */
    public function show($token)
    {
        $tokenRecord = Token::where('token', $token)->first();

        if (!$tokenRecord || !$tokenRecord->isValid()) {
            return view('token.invalid');
        }

        return view('token.form', ['token' => $tokenRecord]);
    }

    /**
     * Procesa el formulario enviado y marca el token como usado.
     */
    public function submit(Request $request, $token)
    {
        $tokenRecord = Token::where('token', $token)->first();

        if (!$tokenRecord || !$tokenRecord->isValid()) {
            return redirect()->back()->withErrors(['Token inválido o expirado.']);
        }

        // Validar input del formulario
        $validator = Validator::make($request->all(), [
            'eva' => 'required|in:1,2,3,4,5,6,7,8,9,10',
            'likert' => 'required|in:Muy de Acuerdo,De Acuerdo,Ni de acuerdo ni en desacuerdo,En desacuerdo,Muy en desacuerdo',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Guardar resultados en el token
        $tokenRecord->update([
            'eva' => $request->eva,
            'likert' => $request->likert,
            'is_used' => true,
            'ip_address' => $request->ip(),
        ]);

        return view('token.success');
    }
}
