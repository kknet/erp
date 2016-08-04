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

$router->group([
    'middleware' => 'auth'
], function () {
    Route::get('/', function () {
        return view('index');
    });
});


$router->group([
    'namespace' => 'Member'
], function () {
    Route::get('user/login', 'UserController@login');
    Route::post('user/check', 'UserController@checkMsg');
    Route::get('user/logout', 'UserController@logout');
    Route::resource('user', 'UserController');
});





