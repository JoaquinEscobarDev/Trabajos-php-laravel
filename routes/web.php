<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\medicoController;

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home')->name('home');
Route::view('/registerPage', 'crud.registro')->name('registerPage');
Route::view('/SearchPage', 'crud.buscar')->name('SearchPage');

Route::get('/listarPage', [medicoController::class, 'listarPaciente'])->name('listar.paciente');
Route::post('/SearchPage', [medicoController::class, 'buscarRutPaciente'])->name('buscar.paciente');

Route::resources(['dn' => medicoController::class,]);


