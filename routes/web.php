<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\EntrenadorDetalleController;

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

//especialidad
Route::get('/especialidad/nueva', function () {
    return view('formulario_especialidad');
});
Route::post('/especialidad/guardar', [EspecialidadController::class, 'guardar'])->name('especialidad.guardar');
Route::get('/especialidad/lista', [EspecialidadController::class, 'mostrar'])->name('especialidad.mostrar');
Route::get('/especialidad/editar/{id}', [EspecialidadController::class, 'editar'])->name('especialidad.editar');
Route::post('/especialidad/actualizar', [EspecialidadController::class, 'actualizar'])->name('especialidad.actualizar');
Route::get('/especialidad/eliminar/{id}', [EspecialidadController::class, 'eliminar'])->name('especialidad.eliminar');

//entrenador
Route::get('/entrenador/nueva', [EntrenadorDetalleController::class, 'nueva'])->name('entrenador.nueva');
Route::post('/entrenador/guardar', [EntrenadorDetalleController::class, 'guardar'])->name('entrenador.guardar');
Route::get('/entrenador/lista', [EntrenadorDetalleController::class, 'mostrar'])->name('entrenador.mostrar');
Route::get('/entrenador/editar/{id}', [EntrenadorDetalleController::class, 'editar'])->name('entrenador.editar');
Route::post('/entrenador/actualizar', [EntrenadorDetalleController::class, 'actualizar'])->name('entrenador.actualizar');
Route::get('/entrenador/eliminar/{id}', [EntrenadorDetalleController::class, 'eliminar'])->name('entrenador.eliminar');

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

Route::get('/operaciones', function () {
    return view('operaciones');
})->name('operaciones');

// RUTA DE ENTRENADORES
Route::get('/entrenador', function () {
    return view('entrenador');
})->name('entrenador');

// RUTA DE PRODUCTOS
Route::get('/producto', function () {
    return view('producto');
})->name('producto');

// RUTA DE TIPOS EJERCICIOS
//PECHO
Route::get('/pecho', function () {
    return view('pecho');
})->name('pecho');

Route::get('/espalda', function () {
    return view('espalda');
})->name('espalda');

Route::get('/biceps', function () {
    return view('biceps');
})->name('biceps');

Route::get('/triceps', function () {
    return view('triceps');
})->name('triceps');

Route::get('/abdomen', function () {
    return view('abdomen');
})->name('abdomen');

Route::get('/hombros', function () {
    return view('hombros');
})->name('hombros');

Route::get('/pantorrillas', function () {
    return view('pantorrillas');
})->name('pantorrillas');

Route::get('/pierna', function () {
    return view('pierna');
})->name('pierna');

// RUTA DE EJERCICIOS DE PECHO
Route::get('/pecho_1', function () {
    return view('pecho_1');
})->name('pecho_1');

Route::get('/pecho_2', function () {
    return view('pecho_2');
})->name('pecho_2');

Route::get('/pecho_3', function () {
    return view('pecho_3');
})->name('pecho_3');

Route::get('/pecho_4', function () {
    return view('pecho_4');
})->name('pecho_4');

Route::get('/pecho_5', function () {
    return view('pecho_5');
})->name('pecho_5');

Route::get('/pecho_6', function () {
    return view('pecho_6');
})->name('pecho_6');

Route::get('/pecho_7', function () {
    return view('pecho_7');
})->name('pecho_7');

Route::get('/pecho_8', function () {
    return view('pecho_8');
})->name('pecho_8');

Route::get('/pecho_9', function () {
    return view('pecho_9');
})->name('pecho_9');

Route::get('/pecho_10', function () {
    return view('pecho_10');
})->name('pecho_10');

Route::get('/pecho_11', function () {
    return view('pecho_11');
})->name('pecho_11');

Route::get('/pecho_12', function () {
    return view('pecho_12');
})->name('pecho_12');

Route::get('/pecho_13', function () {
    return view('pecho_13');
})->name('pecho_13');

Route::get('/pecho_14', function () {
    return view('pecho_14');
})->name('pecho_14');

Route::get('/pecho_15', function () {
    return view('pecho_15');
})->name('pecho_15');

Route::get('/pecho_16', function () {
    return view('pecho_16');
})->name('pecho_16');

Route::get('/pecho_17', function () {
    return view('pecho_17');
})->name('pecho_17');

Route::get('/pecho_18', function () {
    return view('pecho_18');
})->name('pecho_18');

Route::get('/pecho_19', function () {
    return view('pecho_19');
})->name('pecho_19');

Route::get('/pecho_20', function () {
    return view('pecho_20');
})->name('pecho_20');

//ESPALDA
Route::get('/espalda_1', function () {
    return view('espalda_1');
})->name('espalda_1');

Route::get('/espalda_2', function () {
    return view('espalda_2');
})->name('espalda_2');

Route::get('/espalda_3', function () {
    return view('espalda_3');
})->name('espalda_3');

Route::get('/espalda_4', function () {
    return view('espalda_4');
})->name('espalda_4');

Route::get('/espalda_5', function () {
    return view('espalda_5');
})->name('espalda_5');

Route::get('/espalda_6', function () {
    return view('espalda_6');
})->name('espalda_6');

Route::get('/espalda_7', function () {
    return view('espalda_7');
})->name('espalda_7');

Route::get('/espalda_8', function () {
    return view('espalda_8');
})->name('espalda_8');

Route::get('/espalda_9', function () {
    return view('espalda_9');
})->name('espalda_9');

Route::get('/espalda_10', function () {
    return view('espalda_10');
})->name('espalda_10');

Route::get('/espalda_11', function () {
    return view('espalda_11');
})->name('espalda_11');

Route::get('/espalda_12', function () {
    return view('espalda_12');
})->name('espalda_12');

Route::get('/espalda_13', function () {
    return view('espalda_13');
})->name('espalda_13');

Route::get('/espalda_14', function () {
    return view('espalda_14');
})->name('espalda_14');

Route::get('/espalda_15', function () {
    return view('espalda_15');
})->name('espalda_15');

Route::get('/espalda_16', function () {
    return view('espalda_16');
})->name('espalda_16');

Route::get('/espalda_17', function () {
    return view('espalda_17');
})->name('espalda_17');

Route::get('/espalda_18', function () {
    return view('espalda_18');
})->name('espalda_18');

Route::get('/espalda_19', function () {
    return view('espalda_19');
})->name('espalda_19');

Route::get('/espalda_20', function () {
    return view('espalda_20');
})->name('espalda_20');

//BICEPS
Route::get('/biceps_1', function () {
    return view('biceps_1');
})->name('biceps_1');

Route::get('/biceps_2', function () {
    return view('biceps_2');
})->name('biceps_2');

Route::get('/biceps_3', function () {
    return view('biceps_3');
})->name('biceps_3');

Route::get('/biceps_4', function () {
    return view('biceps_4');
})->name('biceps_4');

Route::get('/biceps_5', function () {
    return view('biceps_5');
})->name('biceps_5');

Route::get('/biceps_6', function () {
    return view('biceps_6');
})->name('biceps_6');

Route::get('/biceps_7', function () {
    return view('biceps_7');
})->name('biceps_7');

Route::get('/biceps_8', function () {
    return view('biceps_8');
})->name('biceps_8');

Route::get('/biceps_9', function () {
    return view('biceps_9');
})->name('biceps_9');

Route::get('/biceps_10', function () {
    return view('biceps_10');
})->name('biceps_10');

Route::get('/biceps_11', function () {
    return view('biceps_11');
})->name('biceps_11');

Route::get('/biceps_12', function () {
    return view('biceps_12');
})->name('biceps_12');

Route::get('/biceps_13', function () {
    return view('biceps_13');
})->name('biceps_13');

Route::get('/biceps_14', function () {
    return view('biceps_14');
})->name('biceps_14');

Route::get('/biceps_15', function () {
    return view('biceps_15');
})->name('biceps_15');

Route::get('/biceps_16', function () {
    return view('biceps_16');
})->name('biceps_16');

Route::get('/biceps_17', function () {
    return view('biceps_17');
})->name('biceps_17');

Route::get('/biceps_18', function () {
    return view('biceps_18');
})->name('biceps_18');

Route::get('/biceps_19', function () {
    return view('biceps_19');
})->name('biceps_19');

Route::get('/biceps_20', function () {
    return view('biceps_20');
})->name('biceps_20');

//TRICEPS
Route::get('/triceps_1', function () {
    return view('triceps_1');
})->name('triceps_1');

Route::get('/triceps_2', function () {
    return view('triceps_2');
})->name('triceps_2');

Route::get('/triceps_3', function () {
    return view('triceps_3');
})->name('triceps_3');

Route::get('/triceps_4', function () {
    return view('triceps_4');
})->name('triceps_4');

Route::get('/triceps_5', function () {
    return view('triceps_5');
})->name('triceps_5');

Route::get('/triceps_6', function () {
    return view('triceps_6');
})->name('triceps_6');

Route::get('/triceps_7', function () {
    return view('triceps_7');
})->name('triceps_7');

Route::get('/triceps_8', function () {
    return view('triceps_8');
})->name('triceps_8');

Route::get('/triceps_9', function () {
    return view('triceps_9');
})->name('triceps_9');

Route::get('/triceps_10', function () {
    return view('triceps_10');
})->name('triceps_10');

Route::get('/triceps_11', function () {
    return view('triceps_11');
})->name('triceps_11');

Route::get('/triceps_12', function () {
    return view('triceps_12');
})->name('triceps_12');

Route::get('/triceps_13', function () {
    return view('triceps_13');
})->name('triceps_13');

Route::get('/triceps_14', function () {
    return view('triceps_14');
})->name('triceps_14');

Route::get('/triceps_15', function () {
    return view('triceps_15');
})->name('triceps_15');

Route::get('/triceps_16', function () {
    return view('triceps_16');
})->name('triceps_16');

Route::get('/triceps_17', function () {
    return view('triceps_17');
})->name('triceps_17');

Route::get('/triceps_18', function () {
    return view('triceps_18');
})->name('triceps_18');

Route::get('/triceps_19', function () {
    return view('triceps_19');
})->name('triceps_19');

Route::get('/triceps_20', function () {
    return view('triceps_20');
})->name('triceps_20');

//ABDOMEN
Route::get('/abdomen_1', function () {
    return view('abdomen_1');
})->name('abdomen_1');

Route::get('/abdomen_2', function () {
    return view('abdomen_2');
})->name('abdomen_2');

Route::get('/abdomen_3', function () {
    return view('abdomen_3');
})->name('abdomen_3');

Route::get('/abdomen_4', function () {
    return view('abdomen_4');
})->name('abdomen_4');

Route::get('/abdomen_5', function () {
    return view('abdomen_5');
})->name('abdomen_5');

Route::get('/abdomen_6', function () {
    return view('abdomen_6');
})->name('abdomen_6');

Route::get('/abdomen_7', function () {
    return view('abdomen_7');
})->name('abdomen_7');

Route::get('/abdomen_8', function () {
    return view('abdomen_8');
})->name('abdomen_8');

Route::get('/abdomen_9', function () {
    return view('abdomen_9');
})->name('abdomen_9');

Route::get('/abdomen_10', function () {
    return view('abdomen_10');
})->name('abdomen_10');

Route::get('/abdomen_11', function () {
    return view('abdomen_11');
})->name('abdomen_11');

Route::get('/abdomen_12', function () {
    return view('abdomen_12');
})->name('abdomen_12');

Route::get('/abdomen_13', function () {
    return view('abdomen_13');
})->name('abdomen_13');

Route::get('/abdomen_14', function () {
    return view('abdomen_14');
})->name('abdomen_14');

Route::get('/abdomen_15', function () {
    return view('abdomen_15');
})->name('abdomen_15');

Route::get('/abdomen_16', function () {
    return view('abdomen_16');
})->name('abdomen_16');

Route::get('/abdomen_17', function () {
    return view('abdomen_17');
})->name('abdomen_17');

Route::get('/abdomen_18', function () {
    return view('abdomen_18');
})->name('abdomen_18');

Route::get('/abdomen_19', function () {
    return view('abdomen_19');
})->name('abdomen_19');

Route::get('/abdomen_20', function () {
    return view('abdomen_20');
})->name('abdomen_20');

//HOMBROS
Route::get('/hombros_1', function () {
    return view('hombros_1');
})->name('hombros_1');

Route::get('/hombros_2', function () {
    return view('hombros_2');
})->name('hombros_2');

Route::get('/hombros_3', function () {
    return view('hombros_3');
})->name('hombros_3');

Route::get('/hombros_4', function () {
    return view('hombros_4');
})->name('hombros_4');

Route::get('/hombros_5', function () {
    return view('hombros_5');
})->name('hombros_5');

Route::get('/hombros_6', function () {
    return view('hombros_6');
})->name('hombros_6');

Route::get('/hombros_7', function () {
    return view('hombros_7');
})->name('hombros_7');

Route::get('/hombros_8', function () {
    return view('hombros_8');
})->name('hombros_8');

Route::get('/hombros_9', function () {
    return view('hombros_9');
})->name('hombros_9');

Route::get('/hombros_10', function () {
    return view('hombros_10');
})->name('hombros_10');

Route::get('/hombros_11', function () {
    return view('hombros_11');
})->name('hombros_11');

Route::get('/hombros_12', function () {
    return view('hombros_12');
})->name('hombros_12');

Route::get('/hombros_13', function () {
    return view('hombros_13');
})->name('hombros_13');

Route::get('/hombros_14', function () {
    return view('hombros_14');
})->name('hombros_14');

Route::get('/hombros_15', function () {
    return view('hombros_15');
})->name('hombros_15');

Route::get('/hombros_16', function () {
    return view('hombros_16');
})->name('hombros_16');

Route::get('/hombros_17', function () {
    return view('hombros_17');
})->name('hombros_17');

Route::get('/hombros_18', function () {
    return view('hombros_18');
})->name('hombros_18');

Route::get('/hombros_19', function () {
    return view('hombros_19');
})->name('hombros_19');

Route::get('/hombros_20', function () {
    return view('hombros_20');
})->name('hombros_20');

//PANTORRILLAS
Route::get('/pantorrillas_1', function () {
    return view('pantorrillas_1');
})->name('pantorrillas_1');

Route::get('/pantorrillas_2', function () {
    return view('pantorrillas_2');
})->name('pantorrillas_2');

Route::get('/pantorrillas_3', function () {
    return view('pantorrillas_3');
})->name('pantorrillas_3');

Route::get('/pantorrillas_4', function () {
    return view('pantorrillas_4');
})->name('pantorrillas_4');

Route::get('/pantorrillas_5', function () {
    return view('pantorrillas_5');
})->name('pantorrillas_5');

Route::get('/pantorrillas_6', function () {
    return view('pantorrillas_6');
})->name('pantorrillas_6');

Route::get('/pantorrillas_7', function () {
    return view('pantorrillas_7');
})->name('pantorrillas_7');

Route::get('/pantorrillas_8', function () {
    return view('pantorrillas_8');
})->name('pantorrillas_8');

//PIERNAS
Route::get('/piernas_1', function () {
    return view('piernas_1');
})->name('piernas_1');

Route::get('/piernas_2', function () {
    return view('piernas_2');
})->name('piernas_2');

Route::get('/piernas_3', function () {
    return view('piernas_3');
})->name('piernas_3');

Route::get('/piernas_4', function () {
    return view('piernas_4');
})->name('piernas_4');

Route::get('/piernas_5', function () {
    return view('piernas_5');
})->name('piernas_5');

Route::get('/piernas_6', function () {
    return view('piernas_6');
})->name('piernas_6');

Route::get('/piernas_7', function () {
    return view('piernas_7');
})->name('piernas_7');

Route::get('/piernas_8', function () {
    return view('piernas_8');
})->name('piernas_8');

Route::get('/piernas_9', function () {
    return view('piernas_9');
})->name('piernas_9');

Route::get('/piernas_10', function () {
    return view('piernas_10');
})->name('piernas_10');

Route::get('/piernas_11', function () {
    return view('piernas_11');
})->name('piernas_11');

Route::get('/piernas_12', function () {
    return view('piernas_12');
})->name('piernas_12');

Route::get('/piernas_13', function () {
    return view('piernas_13');
})->name('piernas_13');

Route::get('/piernas_14', function () {
    return view('piernas_14');
})->name('piernas_14');

Route::get('/piernas_15', function () {
    return view('piernas_15');
})->name('piernas_15');

Route::get('/piernas_16', function () {
    return view('piernas_16');
})->name('piernas_16');

Route::get('/piernas_17', function () {
    return view('piernas_17');
})->name('piernas_17');

Route::get('/piernas_18', function () {
    return view('piernas_18');
})->name('piernas_18');

Route::get('/piernas_19', function () {
    return view('piernas_19');
})->name('piernas_19');

Route::get('/piernas_20', function () {
    return view('piernas_20');
})->name('piernas_20');