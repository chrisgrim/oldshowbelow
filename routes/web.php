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


Auth::routes();

Route::GET('/', 'EventsController@index')->name('events');
Route::DELETE('/events/{event}/delete', 'EventsController@destroy')->name('delete_event');
Route::GET('/events/create', 'EventsController@create')->name('create_event');
Route::POST('/events/store', 'EventsController@store')->name('store_event');
Route::GET('/search', 'EventsController@search')->name('event_names');
Route::GET('/{event}', 'EventsController@show')->name('event_names');


Route::GET('/profile/{user}', 'ProfilesController@show')->name('profile');
