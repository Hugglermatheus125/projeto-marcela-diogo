<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\inicioController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\criarcontaController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\metasController;

Route::get('/', [inicioController::class, 'inicio'])->name('inicio');

Route::get('/sobre', [sobreController::class, 'sobre'])->name('sobre');
Route::get('/contato', [contatoController::class, 'contato'])->name('contato');
Route::get('/usuario', [usuarioController::class, 'usuario'])->name('usuario');
Route::get('/metas', [metasController::class, 'metas'])->name('metas');

Route::get('/criarconta', function () {
    return view('criarconta');
});

Route::post('/criarconta', [criarcontaController::class, 'criarconta'])
    ->name('criarconta');