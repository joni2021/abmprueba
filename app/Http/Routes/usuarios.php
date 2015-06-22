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

    Route::get('{id}/edit',[
        'as' => 'usuarios.edit',
        'uses' => 'UsuarioController@edit'
    ]);

    Route::put('{id}/edit', [
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

    Route::get('usuarios/{id}/desactivar', [
        'as' => 'usuarios.desactivar',
        'uses' => 'UsuarioController@desactivar'
    ]);

    Route::get('usuarios/{id}/activar', [
        'as' => 'usuarios.activar',
        'uses' => 'UsuarioController@activar'
    ]);
});
