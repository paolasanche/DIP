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
    return view('layouts.index');
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/index', 'HomeController@index')->name('index');

Route::get('/usuarios', 'usuariosController@usuarios')->name('usuarios');

Route::get('/clientes', 'clientesController@clientes')->name('clientes');

Route::get('/salones', 'salonesController@salones')->name('salones');

Route::get('/tiposervicios', 'tiposerviciosController@tiposervicios')->name('tiposervicios');

Route::get('/servicios', 'serviciosController@servicios')->name('servicios');
