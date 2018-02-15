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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('contracts', 'ContractController');
	Route::resource('tickets', 'TicketController');
	Route::resource('profiles', 'UserController');
});

Route::get('/home', 'HomeController@index')->name('home');




