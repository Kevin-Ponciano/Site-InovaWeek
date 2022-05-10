<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::post('/views',[CadastroController::class, 'store']);
