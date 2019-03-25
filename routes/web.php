<?php


    Route::get('/index', 'CityController@index')->name('index');
    Route::get('/', 'CityController@index')->name('index');
    
    
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register', 'RegisterController@postRegister');

    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@postLogin');
    Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth');
    

    
