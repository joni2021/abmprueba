<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 15/06/15
 * Time: 14:16
 */

Route::post('usuarios/login', 'usuarios\UsuarioController@login');

Route::group(['middleware' => 'auth'], function() {

    Route::get('usuarios', 'usuarios\UsuarioController@index');

    Route::get('usuarios/{id}', 'usuarios\UsuarioController@listaPorId');

    Route::get('usuarios/modificar/{id}', 'usuarios\UsuarioController@edit');

    Route::get('usuarios/desactivar/{id}', 'usuarios\UsuarioController@desactivar');

    Route::get('usuarios/activar/{id}', 'usuarios\UsuarioController@activar');

    Route::get('logout', 'usuarios\UsuarioController@logout');
});

Route::get('alta', 'usuarios\UsuarioController@formAlta');

Route::post('usuarios/alta', 'usuarios\UsuarioController@create');

Route::put('usuarios/modificar/{id}', 'usuarios\UsuarioController@update');
