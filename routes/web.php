<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\SuspectController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Doencas;
use Illuminate\Support\Facades\Route;

// O Middleware verifica se o usuario esta logado
Route::middleware([
    'auth:web',
    config('jetstream.auth_session'),
    'verified'
])->group(callback: function () {
    Route::get('/', fn() => view('pages.home'));
    // Route::get('/dashboard', fn() => view('pages.dashboard'))->name('dashboard');

    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');

    // Routes para realizar a pesquisa
    Route::get('/buscar', [SuspectController::class, 'index'])->name('buscar');
    Route::get('/select2', [SuspectController::class, 'dataAjax']);

    Route::get('doencas', Doencas::class)->name('doencas');
    Route::post('doencas', Doencas::class)->name('doencas');

    // Routes para Agendamentos
    Route::get('/agenda', [ConsultationController::class, 'agenda'])->name('scheduling');

    // Routes da pagina calendario
    Route::get('/calendario', [ConsultationController::class, 'index'])->name('calendar');
    Route::post('/calendario/store', [ConsultationController::class, 'store']);

    Route::post('/calendario/show', [ConsultationController::class, 'show']);
    Route::post('/calendario/show/{name}', [ConsultationController::class, 'showUser']);
    // route edit e update para atualizar um evento
    Route::post('/calendario/edit/{id}', [ConsultationController::class, 'edit']);
    Route::post('/calendario/update/{consultation}', [ConsultationController::class, 'update']);

    Route::post('/calendario/destroy/{id}', [ConsultationController::class, 'destroy']);
});
Route::get('/termos', fn() => view('privacy.terms'))->name('terms');
Route::get('/politica', fn() => view('privacy.policy'))->name('policy');





