<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Test\PostController;
use App\Http\Controllers\Test\RegisterController;
use App\Http\Controllers\Test\LoginController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return view('index');
});

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



Route::get('/normal', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
