<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona/nueva', function () {
    return view('formulario_persona'); //No es necesario la extension aqui
});
