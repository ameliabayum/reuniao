<?php

use App\Http\Controllers\ReuniaoController;
use App\Http\Controllers\SalaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/usuarios", UsuarioController::class);
Route::resource("/salas", SalaController::class);
Route::resource("/solicitacoes", UsuarioController::class);
Route::resource("/reuniao", ReuniaoController::class);