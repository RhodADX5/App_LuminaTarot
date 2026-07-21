<?php

use Illuminate\Support\Facades\Route;

// Ruta principal (Bienvenida / Consulta de prueba)
Route::get('/', function () {
    return view('index');
})->name('index');

// Ruta de Iniciar Sesión
Route::get('/login', function () {
    return view('login');
})->name('login');

// Ruta de Registro de Nuevo Usuario
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

