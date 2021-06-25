<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'AlbumController@welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', 'HomeController@index2')->name('dashboard');


Route::middleware('role:admin')->get('/admin/createalbum', 'AlbumController@create');
Route::middleware('role:admin')->get('/admin/dataalbum', 'AlbumController@index');
Route::middleware('role:admin')->post('/admin/dataalbum', 'AlbumController@store');
Route::middleware('role:admin')->get('/admin/dataalbum/{id}', 'AlbumController@show');
Route::middleware('role:admin')->get('/admin/dataalbum/{id}/edit', 'AlbumController@edit');
Route::middleware('role:admin')->put('/admin/dataalbum/{id}', 'AlbumController@update');
Route::middleware('role:admin')->delete('/admin/dataalbum/{id}', 'AlbumController@destroy');

Route::get('/profile', 'HomeController@profile');
Route::post('/profile', 'HomeController@update');
Route::get('/detail/{id}', 'AlbumController@detail');
Route::post('/detail/{id}', 'AlbumController@addcart');
// Route::post('/detail/{id}', 'AlbumController@cart');
// Route::get('/profile', function () {
//     return view('pemesanan.profile');
// });



Route::get('/cart', 'AlbumController@cart');
Route::get('/transaksi', 'AlbumController@transaksi');
Route::get('/pesanan', function () {
    return view('pemesanan.pesanan');
});

// Route::get('/transaksi', function () {
//     return view('pemesanan.transaksi');
// });

// Route::get('/cart', function () {
//     return view('pemesanan.cart');
// });

Route::middleware('role:admin')->get('/admin/listuser', 'AdminController@show')->name('listuser');

Route::get('/index', function () {
    return view('index');
});

Route::get('/home2', function () {
    return view('home2');
});

