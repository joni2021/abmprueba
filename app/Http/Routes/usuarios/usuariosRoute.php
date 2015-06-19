<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 15/06/15
 * Time: 14:16
 */

Route::post('usuarios/login', 'usuarios\UsuarioController@login');

Route::group(['middleware' => 'auth', 'namespace' => 'usuarios'], function() {

    Route::get('usuarios', [
        'as' => 'usuarios.index',
        'uses' => 'UsuarioController@index'
    ]);

    Route::get('usuarios/{id}', 'UsuarioController@listaPorId');

    Route::get('usuarios/modificar/{id}', 'UsuarioController@edit');

    Route::get('usuarios/desactivar/{id}', 'UsuarioController@desactivar');

    Route::get('usuarios/activar/{id}', 'UsuarioController@activar');

    Route::get('logout', 'UsuarioController@logout');
});

Route::get('alta', 'UsuarioController@formAlta');

Route::post('usuarios/alta', 'UsuarioController@create');

Route::put('usuarios/modificar/{id}', 'UsuarioController@update');
