<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Configuracion;
use App\Categoria;
use App\Producto;
use App\Noticia;
use App\Slider;

class FrontendController extends Controller
{
    public function getIndex(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        $slider=Slider::where('deleted','=',0)->get();
    	return view('frontend/index')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('sliders',$slider);
}
 public function getContact(){
     $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();

    	return view('frontend/contact')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getShop(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getAbout(){
        $configuracion=Configuracion::first();
         $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/about')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getNews(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        $noticias=Noticia::where('deleted','=',0)->get();
    	return view('frontend/news')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('noticias',$noticias);
}
public function getSolutions(){
        $productos=Producto::where('deleted','=',0)->get();
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos);
}
public function getProjects(){

    	return view('frontend/projects');
}

//submenu
public function getTeam(){

    	return view('frontend/team');
}
public function getTestimonials(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/testimonials')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getFaq(){

    	return view('frontend/faq');
}
public function getClassic(){

    	return view('frontend/classic');
}
public function getFullscreen(){

    	return view('frontend/fullscreen');
}
public function getLightbox(){

    	return view('frontend/lightbox');
}
public function detalleProducto($id){
	$producto=Producto::where('deleted','=',0)->where('id','=',$id)->first();
    $configuracion=Configuracion::first();
    $categorias=Categoria::where('deleted','=',0)->get();
    return view('frontend/detalleProducto')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('producto',$producto);

}
public function getNewsdetails(){

    	return view('frontend/news-details');
}
public function getProduct(){

    	return view('frontend/product');
}
public function getCart(){

    	return view('frontend/cart');
}
public function getCheckout(){

    	return view('frontend/checkout');
}
public function getMeterial(){

    	return view('frontend/meterial');
}
public function getAgricultural(){

    	return view('frontend/agricultural');
}
public function getMechanical(){

    	return view('frontend/mechanical');
}
public function getChemical(){

    	return view('frontend/chemical');
}
public function getPower(){

    	return view('frontend/power');
}
public function getOil(){

    	return view('frontend/oil');
}
public function getAlternate(){

    	return view('frontend/alternate');
}
}
