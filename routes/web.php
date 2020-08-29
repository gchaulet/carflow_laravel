<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::get('/getdata', 'UserController@getUsers')->name('user.getdata');
    Route::get('/show/{id}', 'UserController@show')->name('user.show');
    Route::post('/store', 'UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/update/{id?}', 'UserController@update')->name('user.update');
    Route::get('/delete/{id}', 'UserController@delete')->name('user.delete');
});

Route::prefix('car')->group(function () {
    Route::get('/', 'CarController@index')->name('car.index');
    Route::get('/create', 'CarController@create')->name('car.create');
    Route::get('/show/{car}', 'CarController@show')->name('car.show');
    Route::post('/store', 'CarController@store')->name('car.store');
    Route::get('/edit/{car}', 'CarController@edit')->name('car.edit');
    Route::post('/update', 'CarController@update')->name('car.update');
    Route::get('/delete/{car}', 'CarController@delete')->name('car.delete');
});

Route::prefix('reservation')->group(function () {
    Route::get('/', 'ReservationController@index')->name('reservation.index');
    Route::get('/create', 'ReservationController@create')->name('reservation.create');
    Route::get('/show/{reservation}', 'ReservationController@show')->name('reservation.show');
    Route::post('/store', 'ReservationController@store')->name('reservation.store');
    Route::get('/edit/{reservation}', 'ReservationController@edit')->name('reservation.edit');
    Route::post('/update', 'ReservationController@update')->name('reservation.update');
    Route::get('/delete/{reservation}', 'ReservationController@delete')->name('reservation.delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
