<?php

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// Posts Routes
Route::get('/', 'PostController@index')->name('home');
Route::get('posts/create', 'PostController@create');
Route::post('posts', 'PostController@store');
Route::get('posts/{post}' , 'PostController@show');

//Comment Routes
Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/posts/tags/{tag}', 'TagController@index');

//Register
Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
