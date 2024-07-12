<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController; 

//retour pantalla de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::view('alumnos','alumnos')->name('alumnos');
Route::get('/alumnos/crear', [AlumnosController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos', [AlumnosController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos/{id}', [AlumnosController::class, 'show'])->name('alumnos.show');
Route::get('/alumnos', [AlumnosController::class, 'index'])->name('alumnos');
