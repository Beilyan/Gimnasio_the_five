<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

//persona
Route::get('/persona/nueva', function () {
    return view('formulario_persona');
});
Route::post('/persona/guardar', [PersonaController::class, 'guardar'])->name('persona.guardar');
Route::get('/persona/lista', [PersonaController::class, 'mostrar'])->name('persona.mostrar');
Route::get('/persona/editar/{id}', [PersonaController::class, 'editar'])->name('persona.editar');
Route::post('/persona/actualizar', [PersonaController::class, 'actualizar'])->name('persona.actualizar');
Route::get('/persona/eliminar/{id}', [PersonaController::class, 'eliminar'])->name('persona.eliminar');

//proveedoor
Route::get('/proveedor/nueva', function () {
    return view('formulario_proveedor');
});
Route::post('/proveedor/guardar', [ProveedorController::class, 'guardar'])->name('proveedor.guardar');
Route::get('/proveedor/lista', [ProveedorController::class, 'mostrar'])->name('proveedor.mostrar');
Route::get('/proveedor/editar/{id}', [ProveedorController::class, 'editar'])->name('proveedor.editar');
Route::post('/proveedor/actualizar', [ProveedorController::class, 'actualizar'])->name('proveedor.actualizar');
Route::get('/proveedor/eliminar/{id}', [ProveedorController::class, 'eliminar'])->name('proveedor.eliminar');

//membresia
Route::get('/membresia/nueva', function () {
    return view('formulario_membresia');
});
Route::post('/membresia/guardar', [MembresiaController::class, 'guardar'])->name('membresia.guardar');
Route::get('/membresia/lista', [MembresiaController::class, 'mostrar'])->name('membresia.mostrar');
Route::get('/membresia/editar/{id}', [MembresiaController::class, 'editar'])->name('membresia.editar');
Route::post('/membresia/actualizar', [MembresiaController::class, 'actualizar'])->name('membresia.actualizar');
Route::get('/membresia/eliminar/{id}', [MembresiaController::class, 'eliminar'])->name('membresia.eliminar');

//cliente
Route::get('/cliente/nueva', [ClienteController::class, 'nueva'])->name('cliente.nueva');
Route::post('/cliente/guardar', [ClienteController::class, 'guardar'])->name('cliente.guardar');
Route::get('/cliente/lista', [ClienteController::class, 'mostrar'])->name('cliente.mostrar');
Route::get('/cliente/editar/{id}', [ClienteController::class, 'editar'])->name('cliente.editar');
Route::post('/cliente/actualizar', [ClienteController::class, 'actualizar'])->name('cliente.actualizar');
Route::get('/cliente/eliminar/{id}', [ClienteController::class, 'eliminar'])->name('cliente.eliminar');

//empleado
Route::get('/empleado/nueva', [EmpleadoController::class, 'nueva'])->name('empleado.nueva');
Route::post('/empleado/guardar', [EmpleadoController::class, 'guardar'])->name('empleado.guardar');
Route::get('/empleado/lista', [EmpleadoController::class, 'mostrar'])->name('empleado.mostrar');
Route::get('/empleado/editar/{id}', [EmpleadoController::class, 'editar'])->name('empleado.editar');
Route::post('/empleado/actualizar', [EmpleadoController::class, 'actualizar'])->name('empleado.actualizar');
Route::get('/empleado/eliminar/{id}', [EmpleadoController::class, 'eliminar'])->name('empleado.eliminar');

//producto
Route::get('/producto/nueva', [ProductoController::class, 'nueva'])->name('producto.nueva');
Route::post('/producto/guardar', [ProductoController::class, 'guardar'])->name('producto.guardar');
Route::get('/producto/lista', [ProductoController::class, 'mostrar'])->name('producto.mostrar');
Route::get('/producto/editar/{id}', [ProductoController::class, 'editar'])->name('producto.editar');
Route::post('/producto/actualizar', [ProductoController::class, 'actualizar'])->name('producto.actualizar');
Route::get('/producto/eliminar/{id}', [ProductoController::class, 'eliminar'])->name('producto.eliminar');

// LEONEL
// RUTAS DE BARRA DE NEVEGACIÓN
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/lista_entrenadores', function () {
    return view('lista_entrenadores');
})->name('lista_entrenadores');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

// RUTA DE ENTRENADORES
Route::get('/entrenador', function () {
    return view('entrenador');
})->name('entrenador');

// RUTA DE PRODUCTOS
Route::get('/producto', function () {
    return view('producto');
})->name('producto');

// RUTA DE TIPOS EJERCICIOS
// PECHO
Route::get('/pecho', function () {
    return view('pecho');
})->name('pecho');

// RUTA DE EJERCICIOS
Route::get('/pecho_1', function () {
    return view('pecho_1');
})->name('pecho_1');