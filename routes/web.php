<?php

use App\Http\Controllers\BuscaController;
use App\Http\Controllers\CadastroController;
use App\Http\Livewire\Doencas;
use Illuminate\Support\Facades\Route;

Route::middleware([// Verifica se o usuario esta logado
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

Route::get('/buscar', [BuscaController::class, 'index'])->name('buscar');

Route::get('/select2', [BuscaController::class, 'dataAjax']);

Route::get('doencas', Doencas::class)->middleware('auth');
Route::post('doencas', Doencas::class)->middleware('auth');

//Route::post('/views',[CadastroController::class, 'store']);

//Route::get('/cadastro', [CadastroController::class, 'index']);



