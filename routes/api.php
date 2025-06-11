<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Agrega aquí tus rutas de API para tokens
Route::prefix('tokens')->group(function () {
    Route::post('/generate', [TokenManagerController::class, 'generateToken']);
    Route::post('/use', [TokenManagerController::class, 'useToken']);
    Route::get('/stats', [TokenManagerController::class, 'getStats']);
    
    // Rutas específicas para evaluaciones
    Route::post('/evaluation/generate', [TokenManagerController::class, 'generateEvaToken']);
    Route::post('/evaluation/process', [TokenManagerController::class, 'processEvaluation']);
});