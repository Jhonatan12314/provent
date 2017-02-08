<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Categoria;

class CategoriasController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
        $categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/categorias/index')->with('categorias',$categorias);
    }

    public function getCreate(Request $request)
    {
        return view('admin/categorias/create');
    }

    public function create(Request $request)
    {
        $categoria=new Categoria;
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->nombre;
        $categoria->save();
        return redirect('admin/categorias');

    }

    public function getUpdate($id)
    {
        $categoria=Categoria::find($id);
        return view('admin/categorias/create')->with('categoria',$categoria);
    }

    public function update(Request $request)
    {
        $categoria=Categoria::find($request->id);
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->nombre;
        $categoria->save();
        return redirect('admin/categorias');
    }

    public function delete($id)
    {
        $categoria=Categoria::find($id);
        if($categoria)
        {
            $categoria->deleted=1;
            $categoria->save();
            return redirect('admin/categorias');
        }else{
            return redirect('admin/categorias');
        }
        
    }


    
}