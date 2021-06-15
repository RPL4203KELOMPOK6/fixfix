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
Route::middleware('role:admin')->get('/dashboard', 'HomeController@index2')->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin/createalbum', 'AlbumController@create');
Route::get('/admin/dataalbum', 'AlbumController@index');
Route::post('/admin/dataalbum', 'AlbumController@store');
Route::get('/admin/dataalbum/{id}', 'AlbumController@show');
Route::get('/admin/dataalbum/{id}/edit', 'AlbumController@edit');
Route::put('/admin/dataalbum/{id}', 'AlbumController@update');
Route::delete('/admin/dataalbum/{id}', 'AlbumController@destroy');

