<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Producto;
use App\Categoria;

class ProductosController extends Controller
{

    public function getIndex()
    {
        $productos=Producto::where('deleted','=',0)->get();
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/productos/index')->with('productos',$productos)->with('route','productos')->with('categorias',$categorias)->with('route','productos');
    }

    public function getCreate(Request $request)
    {
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/productos/create')->with('categorias',$categorias)->with('route','productos');
    }

    public function create(Request $request)
    {
        $producto=new Producto;
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->idcategoria=$request->categoria;

        $file = $request->file('imagen');

       if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('productos')->put($imageName ,File::get($file));
            $producto->imagen="public/upload/productos/".$imageName;
        }else
        {
            $producto->imagen="";
        }


        $ficha = $request->file('ficha');

       if($ficha)
        {
            $imageName=$this->NewGuid().".".$ficha->getClientOriginalExtension();
            Storage::disk('fichas')->put($imageName ,File::get($ficha));
            $producto->fichatecnica="public/upload/productos/ficha/".$imageName;
        }else
        {
            $producto->fichatecnica="";
        }



        $producto->save();
        return redirect('admin/productos');

    }

    public function getUpdate($id)
    {
        $producto=Producto::find($id);
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/productos/create')->with('producto',$producto)->with('categorias',$categorias)->with('route','productos');
    }

    public function update(Request $request)
    {
        $producto=Producto::find($request->id);
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $file = $request->file('imagen');
            
            if($file)
                {
                    $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
                    Storage::disk('productos')->put($imageName ,File::get($file));
                    File::Delete($producto->imagen);
                    $producto->imagen="public/upload/productos/".$imageName;

                }

          $ficha = $request->file('ficha');
            
            if($ficha)
                {
                    $imageName=$this->NewGuid().".".$ficha->getClientOriginalExtension();
                    Storage::disk('fichas')->put($imageName ,File::get($ficha));
                    File::Delete($producto->fichatecnica);
                    $producto->fichatecnica="public/upload/productos/ficha/".$imageName;

                }

        $producto->save();
        return redirect('admin/productos');
    }

    public function delete($id)
    {
        $producto=Producto::find($id);
        if($producto)
        {
            $producto->deleted=1;
            $producto->save();
            return redirect('admin/productos');
        }else{
            return redirect('admin/productos');
        }
        
    }

        public function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
        return $guidText;
    }



    
}