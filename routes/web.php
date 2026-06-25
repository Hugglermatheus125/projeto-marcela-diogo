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


Route::get('/criarconta', [criarcontaController::class, 'index'])
    ->name('criarconta.index');

Route::post('/criarconta/add', [criarcontaController::class, 'add'])
    ->name('criarconta.add');

Route::post('/criarconta/login', [criarcontaController::class, 'login'])
    ->name('criarconta.login');