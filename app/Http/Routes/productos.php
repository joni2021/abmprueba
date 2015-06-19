<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('productos', 'productos\ProductoController@index');

    Route::get('productos/modificar/{id}', 'productos\ProductoController@edit');

    Route::put('productos/modificar/{id}', 'productos\ProductoController@update');

    Route::get('productos/alta', 'productos\ProductoController@formAlta');

    Route::post('productos/alta', 'productos\ProductoController@create');

    Route::get('productos/activar/{id}', 'productos\ProductoController@activar');

    Route::get('productos/desactivar/{id}', 'productos\ProductoController@desactivar');
});