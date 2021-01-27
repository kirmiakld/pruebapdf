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

Route::get('exportar', 'CalculadoraController@exportPdf')->name('pdf');

Route::get('/calculadora', 'CalculadoraController@index')->name('index');

Route::get('/calculadora', 'CalculadoraController@index')->name('index');

Route::post('/calculadora/calcular', 'CalculadoraController@calcular')->name('calcular');
