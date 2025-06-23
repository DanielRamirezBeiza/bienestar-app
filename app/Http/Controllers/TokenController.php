<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TokenAction;


class TokenController extends Controller
{
     /**
     * Genera el token.
     */
   public function store(Request $request, $token)
    {
        // Guardar contenido fijo al presionar botón
        TokenAction::create([
            'token' => $token,
            'action' => 'boton_presionado',
            'data' => json_encode(['mensaje' => 'Botón fue presionado con éxito']),
        ]);
        return back()->with('status', 'Guardado correctamente');
    }

    public function show()
    {
        // Guardar contenido fijo al presionar botón
        $tokenactions = TokenAction::paginate(100);
        return view('test.show', compact('tokenactions'));
    }
}