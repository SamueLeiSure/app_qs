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
    return view('welcome');
});

Route::auth();

Route::get('/hotellist', 'ListController@hotel');
Route::get('/hotelshow/{id}', 'ListController@hotelshow');
Route::get('/looklist', 'ListController@look');
Route::get('/lookshow/{id}', 'ListController@lookshow');
Route::get('/clothlist', 'ListController@cloth');
Route::get('/clothshow/{id}', 'ListController@clothshow');
//Route::get('/home', 'HomeController@index');
