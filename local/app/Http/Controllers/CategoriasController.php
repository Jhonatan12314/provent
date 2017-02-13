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
        return view('admin/categorias/index')->with('categorias',$categorias)->with('route','categorias');
    }

    public function getCreate(Request $request)
    {
    	$categorias=Categoria::where('deleted','=',0)->get();
        return view('admin/categorias/create')->with('categorias',$categorias)->with('route','categorias');
    }

    public function create(Request $request)
    {
        $categoria=new Categoria;
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->imagen=$request->imagen;

        $file = $request->file('imagen');
        if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('categorias')->put($imageName ,File::get($file));
            $categoria->imagen="public/upload/categorias/".$imageName;
        }else
        {
            $categoria->imagen="";
        }

        $categoria->save();
        return redirect('admin/categorias');

    }

    public function getUpdate($id)
    {
        $categoria=Categoria::find($id);
        return view('admin/categorias/create')->with('categoria',$categoria)->with('route','categorias');
    }

    public function update(Request $request)
    {
        $categoria=Categoria::find($request->id);
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->imagen=$request->imagen;

        $file = $request->file('imagen');
        if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('categorias')->put($imageName ,File::get($file));
            $categoria->imagen="public/upload/categorias/".$imageName;
        }else
        {
            $categoria->imagen="";
        }

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