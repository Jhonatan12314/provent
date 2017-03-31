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
use App\Servicios;
use App\Testimonio;


class FrontendController extends Controller
{

    public function eliminarCarrito(){
        session_start();
        if(!empty($_SESSION["cart_item"])) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["id"] == $k)
                        unset($_SESSION["cart_item"][$k]);              
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
        return redirect()->back();
    }

    public function getCarrito(){
        session_start();
        $servicios=Servicios::where('deleted','=',0)->get();
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('frontend/carrito')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios);
                    
    }

    public function getPagoCancelado(){
        session_start();
        $servicios=Servicios::where('deleted','=',0)->get();
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('frontend/carrito')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios)->with('cancelado','cancelado');
                    
    }

    public function getPagoCompletado(){
        session_start();
        session_destroy();
        $servicios=Servicios::where('deleted','=',0)->get();
        $configuracion=Configuracion::first();
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('frontend/carrito')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios)->with('completado','completado');
                    
    }


    public function agregarCarrito(){
        session_start();
        $id=$_REQUEST['id'];
        $producto=Producto::find($id);

        $itemArray = array($producto->id=>array('id'=>$producto->id,'nombre'=>$producto->nombre,'cantidad'=>1, 'precio'=>$producto->precio));

        if(!empty($_SESSION["cart_item"])) {
                if(in_array($producto->id,array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($producto->id == $k) {
                                if(empty($_SESSION["cart_item"][$k]["cantidad"])) {
                                    $_SESSION["cart_item"][$k]["cantidad"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["cantidad"]+=1;
                            }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
             return redirect()->back();


    }
                    public function getIndex(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $noticias=Noticia::where('deleted','=',0)->orderBy('created_at')->take(3)->get();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        $testimonios=Testimonio::where('deleted','=',0)->get();
                        $slider=Slider::where('deleted','=',0)->get();
                        return view('frontend/index')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('sliders',$slider)->with('noticias',$noticias)->with('testimonios',$testimonios)->with('servicios',$servicios);
                    }
                    public function getContact(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                       $configuracion=Configuracion::first();
                       $categorias=Categoria::where('deleted','=',0)->get();

                       return view('frontend/contact')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios);
                    }

                    public function getEmpresas(){
                        session_start();

                        $servicios=Servicios::where('deleted','=',0)->get();
                       $configuracion=Configuracion::first();
                       $categorias=Categoria::where('deleted','=',0)->get();

                       return view('frontend/empresas')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios);

                    }


                   public function getShop(){
                    session_start();
                    $servicios=Servicios::where('deleted','=',0)->get();
                    $configuracion=Configuracion::first();
                    $categorias=Categoria::where('deleted','=',0)->get();
                    return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios);
                    }

                    public function getMejores(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        return view('frontend/mejores')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios);
                    }
                    public function getAbout(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        return view('frontend/about')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicios',$servicios);
                    }
                    public function getNews(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        $noticias=Noticia::where('deleted','=',0)->get();
                        return view('frontend/news')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('noticias',$noticias)->with('servicios',$servicios);
                    }
                    public function getSolutions(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();

                      $configuracion=Configuracion::first();
                      $categorias=Categoria::where('deleted','=',0)->get();
                      if(isset($_GET['search']))
                      {
                        $productos=Producto::where('deleted','=',0)->where('nombre','like','%'.$_GET['search'].'%')->get();
                        return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos)->with('search',$_GET['search'])->with('servicios',$servicios);
                    }else{
                        $productos=Producto::where('deleted','=',0)->get();
                        return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos)->with('servicios',$servicios);
                    }



                    }

                    public function getTestimonials(){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $clientes=Cliente::where('deleted','=',0)->whereNotNull('imagen')->get();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        return view('frontend/testimonials')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('clientes',$clientes)->with('servicios',$servicios);
                    }
                     public function getServicios(){
                        session_start();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        return view('frontend/servicios')->with('configuracion',$configuracion)->with('servicios',$servicios)->with('categorias',$categorias);
                    }                   

                    public function detalleProducto($id){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                    	$producto=Producto::where('deleted','=',0)->where('id','=',$id)->first();
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        return view('frontend/detalleProducto')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('producto',$producto)->with('servicios',$servicios);

                    }
                    public function Categoria($id){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $productos=Producto::where('idcategoria','=',$id)->where('deleted','=',0)->get();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        $categoria=Categoria::find($id);
                        $configuracion=Configuracion::first();

                        return view('frontend/shop')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('productos',$productos)->with('cat',$categoria)->with('servicios',$servicios);

                    }
                    public function detalleNoticia($id){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $noticia=Noticia::find($id);
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        return view('frontend/detalleNoticia')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('noticia',$noticia)->with('servicios',$servicios);
                    }
                    public function detalleServicio($id){
                        session_start();
                        $servicios=Servicios::where('deleted','=',0)->get();
                        $servicio=Servicios::find($id);
                        $configuracion=Configuracion::first();
                        $categorias=Categoria::where('deleted','=',0)->get();
                        return view('frontend/detalleServicio')->with('configuracion',$configuracion)->with('categorias',$categorias)->with('servicio',$servicio)->with('servicios',$servicios);
                    }                    

                    public function postContact(Request $request){

                     $cliente=new Cliente;
                     $cliente->nombre=$request->nombre;
                     $cliente->telefono=$request->telefono;
                     $cliente->email=$request->email;
                     $cliente->estado="";
                     $cliente->save(); 

                     \Mail::send(['html' => 'email/contacto'],['nombre' => $request->nombre,'asunto'=>$request->asunto,'email'=>$request->email,'mensaje'=>$request->mensaje], function($message)
                     {
                        $message->from('no-responder@veagn.com', 'Notificación');
                        $message->to('rodrigo_2392@hotmail.com')->subject('Nuevo contacto');
                    });
                     return redirect()->back()->with('msg', ['El email ha sido enviado']);
                    }

                    public function descargaFicha(Request $request){
                        $servicios=Servicios::where('deleted','=',0)->get();

                        $cliente=new Cliente;
                        $cliente->nombre=$request->nombre;
                        $cliente->telefono=$request->telefono;
                        $cliente->email=$request->email;
                        $cliente->estado="";
                        $cliente->save(); 


                        \Mail::send(['html' => 'email/email'],['producto' => $request->id], function($message) use ($request)
                        {
                            $message->from('contacto@veagn.com', 'VEAGN');
                            $message->to($request->email)->subject('Ficha técnica');
                        });

                        return redirect()->back()->with('msg', ['El email ha sido enviado']);

                    }

                    public function showFicha(){

                        $id=$_GET['id'];
                        $producto=Producto::find($id);

                        $url ='http://'.$_SERVER['SERVER_NAME'].'/provent/'.$producto->fichatecnica;
                        $content = file_get_contents($url);

                        header('Content-Type: application/pdf');
                        header('Content-Length: ' . strlen($content));
                        header('Content-Disposition: inline; filename="'.$producto->fichatecnica.'"');
                        header('Cache-Control: private, max-age=0, must-revalidate');
                        header('Pragma: public');
                        ini_set('zlib.output_compression','0');

                        die($content);
                    }

}
