<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\ConsultationController;
use App\Http\Livewire\Doencas;
use Illuminate\Support\Facades\Route;

// O Middleware verifica se o usuario esta logado
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', fn() => view('pages.dashboard'))->name('dashboard');
    Route::get('/dashboard', fn() => view('pages.dashboard'))->name('dashboard');


    Route::get('/buscar', [SearchController::class, 'index'])->name('buscar');

    Route::get('/select2', [SearchController::class, 'dataAjax']);

    Route::get('doencas', Doencas::class)->name('doencas');
    Route::post('doencas', Doencas::class)->name('doencas');

    // Routes da pagina calendario
    Route::get('/calendario',[ConsultationController::class, 'index'])->name('calendar');
    Route::post('/calendario/store',[ConsultationController::class, 'store']);
    Route::post('/calendario/show',[ConsultationController::class, 'show']);
    // route edit e update para atualizar um evento
    Route::post('/calendario/edit/{id}',[ConsultationController::class, 'edit']);
    Route::post('/calendario/update/{consultation}',[ConsultationController::class, 'update']); // lembrete: mudar event para ConultationControllerulta

    Route::post('/calendario/destroy/{id}',[ConsultationController::class, 'destroy']);
});

//Route::post('/views',[CadastroController::class, 'store']);

//Route::get('/cadastro', [CadastroController::class, 'index']);



