<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\PiaController;
use App\Http\Controllers\PiasAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Test\PostController;
use App\Http\Controllers\Test\RegisterController;
use App\Http\Controllers\Test\LoginController;
use App\Models\Pia;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return view('index');
})->name('test-home');

Route::get('/test', function(){
    return view('test');
});


Route::get('/inventario', function(){
    return view('inventario');
});


/*
Rutas para hacer pruebas con un login artesanal)
*/
Route::get('/test/crear-cuenta', [RegisterController::class, 'index'])->name('test-register');
Route::post('/test/crear-cuenta', [RegisterController::class, 'store'])->name('test-register');
Route::get('/test/destroy', [RegisterController::class, 'test.destroy']);
Route::get('/test/login', [LoginController::class, 'index'])->name('test-login');
Route::post('/test/login', [LoginController::class, 'store'])->name('test-login');
Route::get('/test/muro', [PostController::class, 'index'])->name('testpost-index')->middleware('auth');
Route::post('/test/logout', [LogoutController::class, 'store'])->name('test-logout');


/*
Rutas para hacer test de cargar una matriz
*/
Route::get('/administrar-matriz',[MatrizController::class,'index'])->name('matriz.index');
Route::post('/cargar-matriz',[MatrizController::class,'store'])->name('matriz.store');
Route::post('/cargar-matrizcargasbienestar',[MatrizController::class,'storeCargasBienestar'])->name('matriz.storecargasbienestar');


/*
Rutas para interactuar con PIAS
Route::get('/pias', [PiaController::class, 'index'])->name('pia.index');

Route::get('/pias-login', function () {
    return view('soap-login');
})->name('pias.login');
Route::post('/soap-login', [App\Http\Controllers\PiaController::class, 'login'])->name('pias.login.submit');
*/

Route::get('/pias-login', [PiasAuthController::class, 'showLogin'])->name('pias.login.form');
Route::post('/pias-login', [PiasAuthController::class, 'login'])->name('pias.login');

/*
Route::middleware('auth.soap')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ['token' => session('soap_token')]);
    })->name('dashboard');
}
*/



