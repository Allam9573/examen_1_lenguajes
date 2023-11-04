<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;

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
Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.index');
Route::get('/directorio/crear-entrada-directorio', [DirectorioController::class, 'crearEntrada'])->name('directorio.entrada_directorio');
Route::get('/directorio/buscar', [DirectorioController::class, 'buscar'])->name('directorio.buscar');
Route::get('/directorio/eliminar', [DirectorioController::class, 'eliminar'])->name('directorio.eliminar');
Route::get('/contactos/lista-contactos', [ContactoController::class, 'listaContactos'])->name('contacto.lista_contactos');
Route::get('/contactos/nuevo-contacto', [ContactoController::class, 'agregarContacto'])->name('contacto.agregar_contacto');

Route::post('/guardar-contacto', [ContactoController::class, 'guardarContacto'])->name('contacto.guardarContacto');