<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/usercontroller/path',[
//    'middleware' => 'First',
//    'uses' => 'UserController@showPath'
// ]);

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomepageController@renderHomepage')->name('homepage');
    Route::get('/home', 'HomepageController@renderHomepage');
});


// Authentication
Route::get('/login', 'Auth\LoginController@renderLoginPage')->name('login');

