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

// Route::get('/', function () {
//     return get('welcome');
// });

Route::get('/', 'DatosController@home');
Route::get('mostrar-datos', 'DatosController@mostrarDatos');
Route::post('datos', 'DatosController@store')->name('datos.store');
