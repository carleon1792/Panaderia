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

Route::get('/vista1', function () {
    return view('vista1');

});

Route::get('/vista2', function () {
    return view('vista2');

});

Route::get('/Auth/login', function () {
    return view('/Auth/login');

});

Route::get('/Auth/logout', function () {
    return view('/Auth/logout');

});



/******************/

Route::get('/practica2', function () {
    return view('Practica2/practica2');

});

Route::resource('tarea','TareaController2');

Route::resource('student','StudentController');

Route::resource('generes','GeneresController');

Route::resource('movies','MoviesController');

Route::resource('home','HomeController');
Route::resource('catalog','CatalogController');

/**RUTAS PROYECTO PANIFICADORA*/

Route::resource('panificadora','PanificadoraController');

Route::resource('producto','ProductosController');

Route::resource('vehiculo','VehiculosController');