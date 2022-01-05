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

// Ruta home:
Route::get('/', function () {
    return view('welcome');
});

// Rutas de prueba:
Route::get('/pruebas', function(){
    return 'Prueba de ruteo';
});

Route::get('/test-orm', 'PruebasController@testOrm');

// Rutas del API:

Route::get('/HPRE/prueba', 'HPREController@pruebas')->name('pruebasHpre');
Route::get('/HPRED/prueba', 'HPREDController@pruebas')->name('pruebasHpred');
Route::post('/api/login', 'UsusuController@login');                                     // [Login de usuarios]
Route::post('/api/user/update', 'UsusuController@update')->middleware('api.auth');      // [Uso de un Middleware de forma individual]

// Rutas de los controladores IMOV e IMOVH (Controladas por autenticación de usuario)
Route::group(['middleware' => ['api.auth']], function () {
    Route::resource('/api/imovh', 'IMOVHController');
    Route::get('/api/imov/detalles/{consecutivo}', 'IMOVController@detallePedido')->name('imov.detalle');
});
