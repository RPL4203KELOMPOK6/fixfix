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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/dashboard', 'HomeController@index2')->name('dashboard');


Route::middleware('role:admin')->get('/admin/createalbum', 'AlbumController@create');
Route::middleware('role:admin')->get('/admin/dataalbum', 'AlbumController@index');
Route::middleware('role:admin')->post('/admin/dataalbum', 'AlbumController@store');
Route::middleware('role:admin')->get('/admin/dataalbum/{id}', 'AlbumController@show');
Route::middleware('role:admin')->get('/admin/dataalbum/{id}/edit', 'AlbumController@edit');
Route::middleware('role:admin')->put('/admin/dataalbum/{id}', 'AlbumController@update');
Route::middleware('role:admin')->delete('/admin/dataalbum/{id}', 'AlbumController@destroy');

Route::get('/profile', function () {
    return view('pemesanan.profile');
});

Route::get('/cart', function () {
    return view('pemesanan.cart');
});

Route::get('/detail_produk', function () {
    return view('pemesanan.detail_produk');
});

Route::get('/pesanan', function () {
    return view('pemesanan.pesanan');
});

Route::get('/transaksi', function () {
    return view('pemesanan.transaksi');
});

Route::get('/address', function () {
    return view('pemesanan.address');
});

Route::middleware('role:admin')->get('/admin/listuser', 'AdminController@show')->name('listuser');