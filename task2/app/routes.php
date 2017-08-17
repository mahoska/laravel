<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showArtistList');
Route::get('/artist/{id}', 'HomeController@showArtistById')->where('id', '[0-9]+');
Route::get('/album/{id}', 'HomeController@showAlbumById')->where('id', '[0-9]+');
Route::get('/track/{id}', 'HomeController@showTrackById')->where('id', '[0-9]+');

