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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'gannets ghanadi';
//     return view('about', ['nama'=> $nama]);
// });

Route::get('/','App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/produk', 'App\Http\Controllers\produkController@index');
Route::get('/produk/create', 'App\Http\Controllers\produkController@create');
Route::get('/produk/{produks}', 'App\Http\Controllers\produkController@show');
Route::post('/produk', 'App\Http\Controllers\produkController@store');
Route::delete('/produk/{produks}', 'App\Http\Controllers\produkController@destroy');
Route::get('/produk/{produks}/edit', 'App\Http\Controllers\produkController@edit');
Route::put('/produk/{produks}', 'App\Http\Controllers\produkController@update');