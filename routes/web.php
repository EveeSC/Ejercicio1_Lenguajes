<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartamentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will    
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ApartamentoController::class, 'index'])->name('apartamento.index');
Route::get('/apartamentos/ircalcular', [ApartamentoController::class, 'ircalcular'])->name('apartamento.ircalcular');
Route::post('/apartamentos/calcularPrecio', [ApartamentoController::class, 'calcularPrecio'])->name('apartamento.calcularPrecio');
Route::get('/apartamentos/tabla-duenios', [ApartamentoController::class, 'mostrarFormDuenios'])->name('apartamento.mostrarFormDuenios');
Route::get('/apartamentos/tabla-propiedades', [ApartamentoController::class, 'mostrarFormPropiedades'])->name('apartamento.mostrarFormPropiedades');
Route::post('/apartamentos/insertarDuenio', [ApartamentoController::class, 'insertarDuenio'])->name('apartamento.insertarDuenio');
Route::post('/apartamentos/insertarPropiedad', [ApartamentoController::class, 'insertarPropiedad'])->name('apartamento.insertarPropiedad');
Route::get('/apartamentos/buscar-duenio', [ApartamentoController::class, 'buscarDuenio'])->name('apartamento.buscarDuenio');
Route::get('/apartamentos/buscar-propiedad', [ApartamentoController::class, 'buscarPropiedad'])->name('apartamento.buscarPropiedad');

Route::get('/apartamentos/tabla-duenios/editar/{idDuenio}', [ApartamentoController::class, 'editarDuenio'])->name('apartamento.editar');
Route::put('/apartamentos/tabla-duenios/actualizar/{idDuenio}', [ApartamentoController::class, 'actualizarDuenio'])->name('apartamento.actualizarDuenio');

Route::get('/apartamentos/tabla-propiedades/editar2/{id}',[ApartamentoController::class, 'editar2'])->name('apartamento.editar2');
Route::put('/apartamentos/tabla-propiedades/actualizar2/{id}', [ApartamentoController::class, 'actualizarPropiedad'])->name('apartamento.actualizarPropiedad');