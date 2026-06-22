<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\criarcontaController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\metasController;

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/inicio', [inicioController::class, 'inicio'])->name('inicio');
Route::get('/sobre', [sobreController::class, 'sobre'])->name('sobre');
Route::get('/contato', [contatoController::class, 'contato'])->name('contato');
Route::post('/criarconta', [criarcontaController::class, 'criarconta'])->name('criarconta');
Route::get('/usuario', [usuarioController::class, 'usuario'])->name('usuario');
Route::get('/metas', [metasController::class, 'metas'])->name('metas');

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/metas', function () {
    return view('metas');
})->name('metas');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::post('/criar-conta', function () {
    return view('criarconta');
})->name('criarconta');

Route::get('/usuario', function () {
    return view('usuario');
})->name('usuario');