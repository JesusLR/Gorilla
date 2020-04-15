<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inicio', 'InicioController'); //para utilizar todas las rutas
Auth::routes();

Route::resource('Categorias', 'CategoriaController'); //para utilizar todas las rutas
Auth::routes();

Route::resource('Inventario', 'InventarioController'); //para utilizar todas las rutas
Auth::routes();

Route::resource('Medidas', 'MedidasController'); //para utilizar todas las rutas
Auth::routes();

Route::resource('Productos', 'ProductosController'); //para utilizar todas las rutas
Auth::routes();
