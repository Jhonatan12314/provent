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
        return view('admin/productos/index')->with('productos',$productos);
    }

    public function getCreate(Request $request)
    {
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/productos/create')->with('categorias',$categorias);
    }

    public function create(Request $request)
    {
        $producto=new Producto;
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->nombre;
        $producto->precio=$request->nombre;
        $producto->imagen=$request->nombre;
        $producto->idcategoria=$request->categoria;
        $producto->save();
        return redirect('admin/productos');

    }

    public function getUpdate($id)
    {
        $producto=Producto::find($id);
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/productos/create')->with('producto',$producto)->with('categorias',$categorias);
    }

    public function update(Request $request)
    {
        $producto=Producto::find($request->id);
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->imagen=$request->nombre;
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



    
}