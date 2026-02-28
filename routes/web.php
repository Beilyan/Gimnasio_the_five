<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

//persona
Route::get('/persona/nueva', function () {
    return view('formulario_persona');
});
Route::post('/persona/guardar', [PersonaController::class, 'guardar'])->name('persona.guardar');
Route::get('/persona/lista', [PersonaController::class, 'mostrar'])->name('persona.mostrar');
Route::get('/persona/editar/{id}', [PersonaController::class, 'editar'])->name('persona.editar');
Route::post('/persona/actualizar', [PersonaController::class, 'actualizar'])->name('persona.actualizar');
//proveedoor
Route::get('/proveedor/nueva', function () {
    return view('formulario_proveedor');
});
Route::post('/proveedor/guardar', [ProveedorController::class, 'guardar'])->name('proveedor.guardar');
Route::get('/proveedor/lista', [ProveedorController::class, 'mostrar'])->name('proveedor.mostrar');
Route::get('/proveedor/editar/{id}', [ProveedorController::class, 'editar'])->name('proveedor.editar');
Route::post('/proveedor/actualizar', [ProveedorController::class, 'actualizar'])->name('proveedor.actualizar');
//membresia
Route::get('/membresia/nueva', function () {
    return view('formulario_membresia');
});
Route::post('/membresia/guardar', [MembresiaController::class, 'guardar'])->name('membresia.guardar');
Route::get('/membresia/lista', [MembresiaController::class, 'mostrar'])->name('membresia.mostrar');
Route::get('/membresia/editar/{id}', [MembresiaController::class, 'editar'])->name('membresia.editar');
Route::post('/membresia/actualizar', [MembresiaController::class, 'actualizar'])->name('membresia.actualizar');
//cliente

//empleado
Route::get('/empleado/nueva', [EmpleadoController::class, 'nueva'])->name('empleado.nueva');
Route::post('/empleado/guardar', [EmpleadoController::class, 'guardar'])->name('empleado.guardar');
Route::get('/empleado/lista', [EmpleadoController::class, 'mostrar'])->name('empleado.mostrar');
Route::get('/empleado/editar/{id}', [EmpleadoController::class, 'editar'])->name('empleado.editar');
Route::post('/empleado/actualizar', [EmpleadoController::class, 'actualizar'])->name('empleado.actualizar');