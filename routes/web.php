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


Route::get('/', 'movieController@welcome')->name('welcome');

Route::get('/detail/{id}', 'movieController@detail')->name('detail');

Route::get('/detail/detailgenre/{name}', 'movieController@detailgenre')->name('detailGenre');

