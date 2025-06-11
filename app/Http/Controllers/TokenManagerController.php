<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TokenManagerController extends Controller
{
    // Generar un nuevo token
    public function generateToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'proposito' => 'required|string|max:255',
            'dias_validez' => 'nullable|integer|min:1',
            'contenido' => 'nullable|string',
            'eva' => 'nullable|integer|between:1,10',
            'likert' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $token = Token::createWithPurpose(
            $request->proposito,
            $request->dias_validez ?? 30,
            [
                'user_id' => auth()->id(),
                'contenido' => $request->contenido,
                'eva' => $request->eva,
                'likert' => $request->likert,
                'metadata' => [
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent()
                ]
            ]
        );

        return response()->json([
            'success' => true,
            'token' => $token->token,
            'expires_at' => $token->expires_at?->toDateTimeString()
        ]);
    }

    // Validar y usar un token
    public function useToken(Request $request)
    {
        $token = Token::where('token', $request->token)->first();

        if (!$token) {
            return response()->json([
                'success' => false,
                'message' => 'Token no encontrado'
            ], 404);
        }

        if (!$token->isValid()) {
            return response()->json([
                'success' => false,
                'message' => $token->is_used ? 'Token ya utilizado' : 'Token expirado'
            ], 400);
        }

        // Marcar como usado
        $token->markAsUsed();

        // Procesar según el propósito
        $response = ['success' => true, 'message' => 'Token válido'];
        
        switch ($token->proposito) {
            case 'evaluacion':
                $response['evaluacion'] = [
                    'eva' => $token->eva,
                    'eva_descripcion' => $token->getEvaDescription(),
                    'likert' => $token->getLikertValue()
                ];
                break;
                
            case 'contenido':
                $response['contenido'] = $token->getContentAsArray();
                break;
                
            case 'acceso':
                $response['access_granted'] = true;
                $response['metadata'] = $token->metadata;
                break;
        }

        return response()->json($response);
    }

    // Obtener estadísticas de tokens
    public function getStats()
    {
        $stats = [
            'total' => Token::count(),
            'activos' => Token::getActiveTokens()->count(),
            'por_proposito' => Token::select('proposito', \DB::raw('count(*) as total'))
                ->groupBy('proposito')
                ->get()
                ->pluck('total', 'proposito'),
            'evaluaciones' => [
                'promedio_eva' => Token::whereNotNull('eva')->avg('eva'),
                'distribucion_likert' => Token::select(\DB::raw('likert->>"$[0]" as respuesta'), \DB::raw('count(*) as total'))
                    ->whereNotNull('likert')
                    ->groupBy('respuesta')
                    ->get()
                    ->pluck('total', 'respuesta')
            ]
        ];

        return response()->json($stats);
    }

    // Generar token para evaluación EVA
    public function generateEvaToken(Request $request)
    {
        $request->merge(['proposito' => 'evaluacion']);
        return $this->generateToken($request);
    }

    // Procesar evaluación con token
    public function processEvaluation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required|string',
            'eva' => 'required|integer|between:1,10',
            'likert' => 'required|string|in:Muy de Acuerdo,De Acuerdo,Ni de acuerdo ni en desacuerdo,En desacuerdo,Muy en desacuerdo'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $token = Token::where('token', $request->token)->firstOrFail();

        if (!$token->isValid()) {
            return response()->json([
                'success' => false,
                'message' => 'Token inválido o ya utilizado'
            ], 400);
        }

        $token->update([
            'eva' => $request->eva,
            'likert' => $request->likert,
            'is_used' => true
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Evaluación registrada correctamente'
        ]);
    }
}