<?php

use App\Http\Controllers\BuscaController;
use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;


Route::get('/cadastro', [CadastroController::class, 'index']);

Route::get('/buscar', [BuscaController::class, 'index'])->name('buscar');

//Route::post('/views',[CadastroController::class, 'store']);

//Verifica se o usuario esta logado
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
