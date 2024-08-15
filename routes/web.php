<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController; 

//retour pantalla de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/servicios{op?}', function ($op=null) {
    return view('servicios',['op'=>$op]);
}) ->where('op','[A-Za-z]')->name('servicios');

Route::get('/proyectos/{op?}', function ($op=null) {
    return view('proyectos',['op'=>$op]);
}) ->where('op','[A-Za-z]')->name('proyectos');

Route::get('/clientes/crear', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/clientes/{id}/editar', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::patch('/clientes/{id}/update', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('/blog/{op?}', function ($op=null) {
    return view('blog',['op'=>$op]);
}) ->where('op','[0-9]')->name('blog');

Route::get('/contactos/{op?}', function ($op=null) {
    return view('contactos',['op'=>$op]);
}) ->where('op','[A-Za-z]')->name('contactos');
