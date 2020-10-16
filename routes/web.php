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


Route::get('/ngu','Home@index')->name('index');

Route::get('/category','Admin\Category@index')->name('index');

Route::prefix('category')->namespace('Admin')->group(function(){
    Route::get('/create','Category@create')->name('create');

    Route::post('/store','Category@store')->name('store');
    Route::get('/edit/{id}','Category@edit')->name('edit');
    Route::post('/update/{id}','Category@update')->name('update');
});

