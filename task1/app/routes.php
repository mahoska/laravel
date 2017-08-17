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

Route::get('/', function()
{
	return Redirect::to('/home');
});
Route::get('/home', 'HomeController@showIndex');
Route::get('/articles', 'HomeController@showArticleList');
Route::get('/about', 'HomeController@showAbout');
Route::get('/contact-us', 'HomeController@showContact');

Route::get('/article/{id?}','HomeController@showArticle');
Route::post('/contact-us','HomeController@postContact');
Route::get('/thank','HomeController@showThank');
