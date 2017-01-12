<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//Frontend
Route::get('/','FrontendController@getIndex');
Route::get('index','FrontendController@getIndex');
Route::get('shop','FrontendController@getShop');
Route::get('about','FrontendController@getAbout');
Route::get('solutions','FrontendController@getSolutions');
Route::get('news','FrontendController@getNews');
Route::get('projects','FrontendController@getProjects');
Route::get('contact','FrontendController@getContact');