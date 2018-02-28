<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/blog', function () {
	return 'this is blogs page';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
