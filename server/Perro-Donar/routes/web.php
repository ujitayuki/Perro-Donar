<?php

Route::get('/auth', 'TopController@auth')->name('auth');
Route::get('/auth2', 'TopController@auth2')->name('auth2');


Route::get('/', 'TopController@index')->name('index');
Route::get('/about', 'TopController@about')->name('about');
Route::get('/news', 'TopController@news')->name('news');
Route::get('/commercial', 'TopController@commercial')->name('commercial');