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

//Frontend/menu
Route::get('/','FrontendController@getIndex');
Route::get('index','FrontendController@getIndex');
Route::get('about','FrontendController@getAbout');
Route::get('solutions','FrontendController@getSolutions');
Route::get('projects','FrontendController@getProjects');
Route::get('news','FrontendController@getNews');
Route::get('shop','FrontendController@getShop');
Route::get('contact','FrontendController@getContact');
//Frontend/submenu
Route::get('team','FrontendController@getTeam');
Route::get('testimonials','FrontendController@getTestimonials');
Route::get('faq','FrontendController@getFaq');
Route::get('classic','FrontendController@getClassic');
Route::get('fullscreen','FrontendController@getFullscreen');
Route::get('lightbox','FrontendController@getLightbox');
Route::get('projects-details','FrontendController@getProjectdetails');
Route::get('news-details','FrontendController@getNewsdetails');
Route::get('product','FrontendController@getProduct');
Route::get('cart','FrontendController@getCart');
Route::get('checkout','FrontendController@getCheckout');
Route::get('meterial','FrontendController@getMeterial');
Route::get('agricultural','FrontendController@getAgricultural');
Route::get('mechanical','FrontendController@getMechanical');
Route::get('chemical','FrontendController@getChemical');
Route::get('power','FrontendController@getPower');
Route::get('oil','FrontendController@getOil');
Route::get('alternate','FrontendController@getAlternate');

//admin



Route::group(['prefix' => 'admin'], function () {

Route::get('/','UserController@getlogin');
Route::get('dashboard','UserController@dashboard');
Route::get('categorias','CategoriasController@getIndex');
Route::get('categorias/create','CategoriasController@getCreate');

Route::get('logout','UserController@logout');

});