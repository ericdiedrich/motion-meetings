<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/meetings', 'MeetingsController');

Route::get('/view', 'RoomsController@view');
Route::get('/rooms', 'RoomsController@rooms');
Route::get('/book', 'RoomsController@book');
Route::get('/bookroom', 'RoomsController@bookroom');
Route::post('/bookroom', 'RoomsController@bookmeeting');

Route::get('/deletemeeting', 'RoomsController@bookroom');
Route::post('/deletemeeting', 'RoomsController@deletemeeting');


Route::get('/', 'RoomsController@index');
Route::get('/profile', 'RoomsController@profile');

Route::resource('/users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
