<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Noticia;

class NoticiasController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
        $noticias=Noticia::where('deleted','=',0)->get();
        return view('admin/noticias/index')->with('noticias',$noticias)->with('route','noticias');
    }

    public function getCreate(Request $request)
    {
        $noticias=Noticia::where('deleted','=',0)->get();
        return view('admin/noticias/create')->with('noticias',$noticias)->with('route','noticias');
    }

    public function create(Request $request)
    {
        $noticia=new Noticia;
        $noticia->titulo=$request->titulo;
        $noticia->descripcion=$request->descripcion;
        $noticia->imagen=$request->imagen;
        $noticia->save();
        return redirect('admin/noticias');

    }

    public function getUpdate($id)
    {
        $noticia=Noticia::find($id);
        $noticias=Noticia::where('deleted','=',0)->get();
        return view('admin/noticias/create')->with('noticia',$noticia)->with('noticias',$noticias)->with('route','noticias');
    }

    public function update(Request $request)
    {
        $noticia=Noticia::find($request->id);
        $noticia->titulo=$request->titulo;
        $noticia->descripcion=$request->descripcion;
        $noticia->imagen=$request->imagen;
        $noticia->save();
        return redirect('admin/noticias');
    }

    public function delete($id)
    {
        $noticia=Noticia::find($id);
        if($noticia)
        {
            $noticia->deleted=1;
            $noticia->save();
            return redirect('admin/noticias');
        }else{
            return redirect('admin/noticias');
        }
        
    }



    
}