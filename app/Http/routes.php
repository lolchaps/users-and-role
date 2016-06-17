<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
	    return view('welcome');
	});

	Route::auth();

	// Admin routes...
    Route::group(['middleware' => 'isAdmin'], function () {
    	Route::get('/home', 'HomeController@index');
    });
 
});
