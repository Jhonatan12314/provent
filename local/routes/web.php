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
Route::get('servicios','FrontendController@getServicios');
Route::get('Empresas','FrontendController@getEmpresas');

Route::get('agregarCarrito','FrontendController@agregarCarrito');
Route::get('eliminarCarrito','FrontendController@eliminarCarrito');
Route::get('carrito','FrontendController@getCarrito');
//Frontend/submenu
Route::get('team','FrontendController@getTeam');
Route::get('testimonials','FrontendController@getTestimonials');
Route::get('faq','FrontendController@getFaq');
Route::get('classic','FrontendController@getClassic');
Route::get('fullscreen','FrontendController@getFullscreen');
Route::get('lightbox','FrontendController@getLightbox');

Route::get('pagoCancelado','FrontendController@getPagoCancelado');
Route::get('pagoCompletado','FrontendController@getPagoCompletado');



Route::get('Producto/{id}','FrontendController@detalleProducto');
Route::get('categorias/{id}','FrontendController@Categoria');


Route::get('Noticia/{id}','FrontendController@detalleNoticia');
Route::get('Servicio/{id}','FrontendController@detalleServicio');

Route::get('Mejores','FrontendController@getMejores');
//Route::get('product','FrontendController@getProduct');
//Route::get('cart','FrontendController@getCart');
//Route::get('checkout','FrontendController@getCheckout');

//Route::get('alternate','FrontendController@getAlternate');

//admin


Route::get('admin','UserController@getlogin');
Route::get('login','UserController@getlogin');
Route::post('login','UserController@postlogin');

Route::get('createuser','UserController@createUser');

Route::post('descargaFicha','FrontendController@descargaFicha');

Route::post('postContact','FrontendController@postContact');

Route::get('ficha','FrontendController@showFicha');





//Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


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

//servicios
Route::get('servicios','ServiciosController@getIndex');
Route::get('servicios/create','ServiciosController@getCreate');
Route::post('servicios/create','ServiciosController@create');
Route::get('servicios/update/{id}','ServiciosController@getUpdate');
Route::post('servicios/update','ServiciosController@update');
Route::get('servicios/delete/{id}','ServiciosController@delete');

//slider
Route::get('sliders','SliderController@getIndex');
Route::get('sliders/create','SliderController@getCreate');
Route::post('sliders/create','SliderController@create');
Route::get('sliders/update/{id}','SliderController@getUpdate');
Route::post('sliders/update','SliderController@update');
Route::get('sliders/delete/{id}','SliderController@delete');

//configuracion
Route::get('configuracion','ConfiguracionController@getIndex');
Route::post('configuracion/create','ConfiguracionController@create');



//popup

Route::get('popup','ConfiguracionController@popup');
Route::post('popup/create','ConfiguracionController@postPopUp');


//Testimonios
Route::get('testimonios','TestimoniosController@getIndex');
Route::get('testimonios/create','TestimoniosController@getCreate');
Route::post('testimonios/create','TestimoniosController@create');
Route::get('testimonios/update/{id}','TestimoniosController@getUpdate');
Route::post('testimonios/update','TestimoniosController@update');
Route::get('testimonios/delete/{id}','TestimoniosController@delete');



Route::get('logout','UserController@logout');

}); 

Route::get('500', function()
{
    abort(500);
});