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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/xkcd', function(){
	return view('xkcd.xkcd');
});

//Route::post('/xkcd', 'xkcdGenerator@postForm');

Route::get('/loremipsum', function () {
    return view('lorem.lorem');
});

//Route::post('/loremipsum', 'LIController@postForm');

Route::get('/randomuser', function () {
    return view('ruser.ruser');
});

//Route::post('/randomuser', 'RUserController@postForm');

