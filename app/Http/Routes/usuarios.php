<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 15/06/15
 * Time: 14:16
 */



Route::group(['prefix' => 'usuarios', 'namespace' => 'usuarios'], function() {

    Route::get('/', [
        'as' => 'usuarios.index',
        'uses' => 'UsuarioController@index'
    ]);

    Route::get('edit/{idUsuario}',[
        'as' => 'usuarios.edit',
        'uses' => 'UsuarioController@edit'
    ]);

    Route::put('edit/{idUsuario}', [
        'as' => 'usuarios.update',
        'uses' => 'UsuarioController@update'
    ]);

    Route::get('create', [
        'as' => 'usuarios.create',
        'uses' => 'UsuarioController@create'
    ]);

    Route::post('create', [
        'as' => 'usuarios.store',
        'uses' => 'UsuarioController@store'
    ]);

    Route::get('usuarios/desactivar/{id}', 'UsuarioController@desactivar');

    Route::get('usuarios/activar/{id}', 'UsuarioController@activar');
});
