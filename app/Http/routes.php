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

Route::get('/', 'Auth\AuthController@index');

require (__DIR__ . '/Routes/auth.php');

Route::group(['middleware' => 'auth'], function() {

    require (__DIR__ . '/Routes/productos.php');

    require (__DIR__ . '/Routes/usuarios.php');

});
