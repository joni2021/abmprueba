<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('productos',[
        'as' => 'productos.index',
        'uses' => 'productos\ProductoController@index'
    ]);

    Route::get('productos/modificar/{id}', [
        'as' => 'productos.modificar',
        'uses' => 'productos\ProductoController@edit'
    ]);

    Route::put('productos/modificar/{id}', [
        'as' => 'productos.modificar',
        'uses' => 'productos\ProductoController@update'
    ]);

    Route::get('productos/alta', [
        'as' => 'productos.alta',
        'uses' => 'productos\ProductoController@formAlta'
    ]);

    Route::post('productos/alta', [
        'as' => 'productos.alta',
        'uses' => 'productos\ProductoController@create'
    ]);

    Route::get('productos/activar/{id}', [
        'as' => 'productos.activar',
        'uses' => 'productos\ProductoController@activar'
    ]);

    Route::get('productos/desactivar/{id}', [
        'as' => 'productos.desactivar',
        'uses' => 'productos\ProductoController@desactivar'
    ]);
});