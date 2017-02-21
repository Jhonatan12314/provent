<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Configuracion;
use App\Categoria;
use App\Producto;
use App\Noticia;
use App\Slider;
use App\Cliente;


class FrontendController extends Controller
{
    public function getIndex(){
        $noticias=Noticia::where('deleted','=',0)->orderBy('created_at')->take(3)->get();
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        $slider=Slider::where('deleted','=',0)->get();
    	return view('frontend/index')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('sliders',$slider)->with('noticias',$noticias);
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

public function getMejores(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('frontend/mejores')->with('configuracion',$configuracion)->with('categorias',$categorias);
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

      $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    if(isset($_GET['search']))
    {
        $productos=Producto::where('deleted','=',0)->where('nombre','like','%'.$_GET['search'].'%')->get();
        return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos)->with('search',$_GET['search']);
    }else{
        $productos=Producto::where('deleted','=',0)->get();
        return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos);
    }
        
      
    	
}

public function getTestimonials(){
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
    	return view('frontend/testimonials')->with('configuracion',$configuracion)->with('categorias',$categorias);
}

public function detalleProducto($id){
	$producto=Producto::where('deleted','=',0)->where('id','=',$id)->first();
    $configuracion=Configuracion::first();
    $categorias=Categoria::where('deleted','=',0)->get();
    return view('frontend/detalleProducto')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('producto',$producto);

}
public function Categoria($id){
    $productos=Producto::where('idcategoria','=',$id)->where('deleted','=',0)->get();
    $categorias=Categoria::where('deleted','=',0)->get();
    $categoria=Categoria::find($id);
    $configuracion=Configuracion::first();

    return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos)->with('cat',$categoria);

}
public function detalleNoticia($id){
    $noticia=Noticia::find($id);
    $configuracion=Configuracion::first();
    $categorias=Categoria::where('deleted','=',0)->get();
    return view('frontend/detalleNoticia')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('noticia',$noticia);
}

public function postContact(Request $request){
       $cliente=new Cliente;
    $cliente->nombre=$request->nombre;
    $cliente->telefono=$request->telefono;
    $cliente->email=$request->email;
    $cliente->estado="";
    $cliente->save(); 

    \Mail::send(['html' => 'email/email'],['nombre' => $request->nombre,'asunto'=>$request->asunto,'email'=>$request->email,'mensaje'=>$request->mensaje], function($message)
    {
         $message->to('contacto@veagn.com');
    });
}

public function descargaFicha(Request $request){

    $cliente=new Cliente;
    $cliente->nombre=$request->nombre;
    $cliente->telefono=$request->telefono;
    $cliente->email=$request->email;
    $cliente->estado="";
    $cliente->save(); 

    \Mail::send(['html' => 'email/email'],['producto' => $request->id], function($message)
    {
         $message->to('rodrigo_2392@hotmail.com');
    });

    return redirect()->back()->with('msg', ['El email ha sido enviado']);

}

}
