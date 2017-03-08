<?php

Route::get('/books/{id}', 'SearchController@search');
Route::get('/books', 'SearchController@index');


Route::get('/admin', 'AdminController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->middleware('protected');
Route::get('/logout', 'LoginController@logout');
