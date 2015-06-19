<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 19/06/15
 * Time: 15:31
 */

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {

    Route::group(['middleware' => 'guest'], function() {

        Route::get('login', [
            'as' => 'auth.login',
            'uses' => 'AuthController@index'
        ]);

        Route::post('login', [
            'as' => 'auth.authenticate',
            'uses' => 'AuthController@authenticate'
        ]);

    });

    Route::get('logout', [
        'as' => 'auth.logout',
        'uses' => 'AuthController@logout',
        'middleware' => 'auth'
    ]);

});

