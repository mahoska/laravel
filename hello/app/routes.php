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
    //return View::make('hello');
    return 'Hello laravel!';
});

/*
 Route::get('/hello', function(){
    return 'Hello!';
});

 */

Route::get('/hello/{name?}','HelloController@showIndex');
Route::get('/form','HelloController@showForm');
Route::post('/form','HelloController@postForm');
Route::get('/blade','HelloController@showBlade');

Route:: get('my/long/path/to/blade', array('uses'=>'HelloController@showBlade', 'as'=>'bladepath'));

