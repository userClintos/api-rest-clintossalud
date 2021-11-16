<?php

use Illuminate\Support\Facades\Route;

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

// Rutas de prueba

Route::get('/pruebas', function(){
    return 'Prueba de ruteo';
});

Route::get('/test-orm', 'PruebasController@testOrm');

// Rutas del API
Route::get('/HPRE/prueba', 'HPREController@pruebas')->name('pruebasHpre');
Route::get('/HPRED/prueba', 'HPREDController@pruebas')->name('pruebasHpred');
