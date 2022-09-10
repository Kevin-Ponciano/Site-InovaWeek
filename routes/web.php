<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EventoController;
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

    // Routes da pagina calendario
    Route::get('/calendario',[EventoController::class, 'index'])->name('calendar');
    Route::post('/calendario/store',[EventoController::class, 'store']);
    Route::post('/calendario/show',[EventoController::class, 'show']);
    // route edit e update para atualizar um evento
    Route::post('/calendario/edit/{id}',[EventoController::class, 'edit']);
    Route::post('/calendario/update/{event}',[EventoController::class, 'update']); // lembrete: mudar event para consulta

    Route::post('/calendario/destroy/{id}',[EventoController::class, 'destroy']);
});

//Route::post('/views',[CadastroController::class, 'store']);

//Route::get('/cadastro', [CadastroController::class, 'index']);



