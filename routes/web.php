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

Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about');
Route::get('/edit','PagesController@edit')->name('edit');
Route::get('/delete','PagesController@delete')->name('delete');
Route::post('/edit','PagesController@editpost')->name('editpost');
