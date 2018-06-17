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

Route::redirect('/', '/motorbikes', 301);
Route::get('/motorbikes', 'MotorbikesController@index');
Route::get('/motorbikes/add', 'MotorbikesController@addBike')->name('add-motorbike');
Route::get('/motorbikes/addowner', 'MotorbikesController@addOwner')->name('add-owner');
Route::get('/cards', 'CardsController@index');
Route::get('/bookstore', 'BookstoreController@index');
Route::get('/bookstore/add', 'BookstoreController@addMagazine')->name('add-magazine');
Route::get('bookstore/remove/{id}', 'BookstoreController@removeMagazine');
