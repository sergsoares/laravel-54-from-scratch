<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');