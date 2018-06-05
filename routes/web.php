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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/secret', 'Secret@secret')->name('secret');
Route::post('/submit', 'Secret@submit')->name('secret');
Route::post('/uploadtable', 'HomeController@upload')->name('upload');
Route::get('/submit', 'HomeController@show')->name('secret');
Route::get('/delete', 'HomeController@delete')->name('secret');
Route::get('/times', 'Secret@times')->name('Time Table');