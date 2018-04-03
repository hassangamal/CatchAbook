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
// to all books and books
Route::get('/home', 'HomeController@index');
// to all books and books
Route::get('/mybrow', 'HomeController@mybrow');
// to all books and books
Route::get('/brow', 'HomeController@brow');
// to Add books
Route::get('/add', 'HomeController@add');

