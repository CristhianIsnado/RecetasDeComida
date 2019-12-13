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

Route::get('platospdf','ReportesController@ReportePlato');
Route::get('departamentospdf','ReportesController@ReporteDepartamento');
Route::get('departamento/list','ControllerDepartamento@get_all');
Route::get('departamento','ControllerDepartamento@index')->name('departamento');
Route::get('descargar-departamentos','ControllerDepartamento@pdf')->name('departamentos.pdf');
Route::get('plato','ControllerPlato@index')->name('plato');
Route::get('descargar-platos','ControllerPlato@pdf')->name('platos.pdf');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
