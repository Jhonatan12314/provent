<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Configuracion;
use App\Categoria;

class FrontendController extends Controller
{
    public function getIndex(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/index')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
 public function getContact(){
     $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();

    	return view('frontend/contact')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getShop(){

    	return view('frontend/shop');
}
public function getAbout(){
        $configuracion=Configuracion::first();
         $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/about')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getNews(){

    	return view('frontend/news');
}
public function getSolutions(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias);
}
public function getProjects(){

    	return view('frontend/projects');
}

//submenu
public function getTeam(){

    	return view('frontend/team');
}
public function getTestimonials(){

    	return view('frontend/testimonials');
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
public function getProjectdetails(){

    	return view('frontend/projects-details');
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
