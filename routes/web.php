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


Route::group(['prefix'=>'api'], function(){
    Route::apiResource('clientes','clientesController');
});


Route::group(['prefix'=>'api'], function(){
    Route::apiResource('salones','salonesController');
});



Route::group(['prefix'=>'api'], function(){
    Route::apiResource('servicios','serviciosController');
});




Route::group(['prefix'=>'api'], function(){
    Route::apiResource('tiposervicios','tiposerviciosController');
});



Route::group(['prefix'=>'api'], function(){
    Route::apiResource('usuarios','usuariosController');
});