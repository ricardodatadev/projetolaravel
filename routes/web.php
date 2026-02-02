<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FuncionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('departamentos', DepartamentoController::class);
Route::resource('funcionarios', FuncionarioController::class);