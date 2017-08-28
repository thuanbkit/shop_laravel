<?php

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::group(['middleware'=>'auth'],function () {
    Route::get('/', [
        'as'=>'dashboard',
        'uses'=> 'DashboardController@index'
    ]);
    Route::resource('product','ProductsController');
});

