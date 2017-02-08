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


//categorias
Route::get('categorias','CategoriasController@getIndex');
Route::get('categorias/create','CategoriasController@getCreate');
Route::post('categorias/create','CategoriasController@create');
Route::get('categorias/update/{id}','CategoriasController@getUpdate');
Route::post('categorias/update','CategoriasController@update');
Route::get('categorias/delete/{id}','CategoriasController@delete');


//productos
Route::get('productos','ProductosController@getIndex');
Route::get('productos/create','ProductosController@getCreate');
Route::post('productos/create','ProductosController@create');
Route::get('productos/update/{id}','ProductosController@getUpdate');
Route::post('productos/update','ProductosController@update');
Route::get('productos/delete/{id}','ProductosController@delete');


//clientes
Route::get('clientes','ClientesController@getIndex');
Route::get('clientes/create','ClientesController@getCreate');
Route::post('clientes/create','ClientesController@create');
Route::get('clientes/update/{id}','ClientesController@getUpdate');
Route::post('clientes/update','ClientesController@update');
Route::get('clientes/delete/{id}','ClientesController@delete');

//noticias
Route::get('noticias','NoticiasController@getIndex');
Route::get('noticias/create','NoticiasController@getCreate');
Route::post('noticias/create','NoticiasController@create');
Route::get('noticias/update/{id}','NoticiasController@getUpdate');
Route::post('noticias/update','NoticiasController@update');
Route::get('noticias/delete/{id}','NoticiasController@delete');


//slider
Route::get('slider','SliderController@getIndex');
Route::get('slider/create','SliderController@getCreate');
Route::post('slider/create','SliderController@create');
Route::get('slider/update/{id}','SliderController@getUpdate');
Route::post('slider/update','SliderController@update');
Route::get('slider/delete/{id}','SliderController@delete');

//configuracion
Route::get('configuracion','ConfiguracionController@getIndex');
Route::get('configuracion/create','ConfiguracionController@getCreate');
Route::post('configuracion/create','ConfiguracionController@create');
Route::get('configuracion/update/{id}','ConfiguracionController@getUpdate');
Route::post('configuracion/update','ConfiguracionController@update');
Route::get('configuracion/delete/{id}','ConfiguracionController@delete');

Route::get('logout','UserController@logout');

});