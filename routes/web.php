<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EventController;
use App\Http\Livewire\Doencas;
use Illuminate\Support\Facades\Route;

// O Middleware verifica se o usuario esta logado
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', fn() => view('dashboard'))->name('dashboard');
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');


    Route::get('/buscar', [SearchController::class, 'index'])->name('buscar');

    Route::get('/select2', [SearchController::class, 'dataAjax']);

    Route::get('doencas', Doencas::class)->name('doencas');
    Route::post('doencas', Doencas::class)->name('doencas');

    Route::get('/calendario',[EventController::class, 'index'])->name('event');
});

//Route::post('/views',[CadastroController::class, 'store']);

//Route::get('/cadastro', [CadastroController::class, 'index']);



