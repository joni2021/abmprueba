<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::post('usuarios/login', 'UsuarioController@login');

Route::group(['middleware' => 'auth'], function() {

    Route::get('usuarios', 'UsuarioController@index');

    Route::get('usuarios/{id}', 'UsuarioController@listaPorId');

    Route::get('usuarios/modificar/{id}', 'UsuarioController@edit');

    Route::get('usuarios/desactivar/{id}', 'UsuarioController@desactivar');

    Route::get('usuarios/activar/{id}', 'UsuarioController@activar');

    Route::get('logout', 'UsuarioController@logout');
});

Route::get('alta', 'UsuarioController@formAlta');

Route::post('usuarios/alta', 'UsuarioController@create');

Route::put('usuarios/modificar/{id}', 'UsuarioController@update');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
