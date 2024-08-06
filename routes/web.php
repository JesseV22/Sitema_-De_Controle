<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rotas de Autenticação Social
Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);

// Rotas de Autenticação
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Rotas protegidas
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('itens', ItemController::class);
    Route::resource('movimentacoes', MovimentacaoController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

