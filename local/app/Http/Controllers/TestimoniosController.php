<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Testimonio;

class TestimoniosController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
        $testimonios=Testimonio::where('deleted','=',0)->get();
        return view('admin/testimonios/index')->with('testimonios',$testimonios)->with('route','testimonios');
    }

    public function getCreate(Request $request)
    {
    	$testimonios=Testimonio::where('deleted','=',0)->get();
        return view('admin/testimonios/create')->with('testimonios',$testimonios)->with('route','testimonios');
    }

    public function create(Request $request)
    {
        $testimonio=new Testimonio;
        $testimonio->nombre=$request->nombre;
        $testimonio->descripcion=$request->descripcion;
        $testimonio->imagen=$request->imagen;
        $testimonio->deleted=0;

        $file = $request->file('imagen');

        if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('testimonios')->put($imageName ,File::get($file));
            $testimonio->imagen="public/upload/testimonios/".$imageName;
        }else
        {
            $testimonio->imagen="";
        }

        $testimonio->save();
        return redirect('admin/testimonios');

    }

    public function getUpdate($id)
    {
        $testimonio=Testimonio::find($id);
        return view('admin/testimonios/create')->with('testimonio',$testimonio)->with('route','testimonios');
    }

    public function update(Request $request)
    {
        $testimonio=Testimonio::find($request->id);
        $testimonio->nombre=$request->nombre;
        $testimonio->descripcion=$request->descripcion;
        

        $file = $request->file('imagen');
            
            if($file)
                {
                    $testimonio->imagen=$request->imagen;
                    $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
                    Storage::disk('testimonios')->put($imageName ,File::get($file));
                    File::Delete($testimonio->imagen);
                    $testimonio->imagen="public/upload/testimonios/".$imageName;

                }

        $testimonio->save();
        return redirect('admin/testimonios');
    }

    public function delete($id)
    {
        $testimonio=Testimonio::find($id);
        if($testimonio)
        {
            $testimonio->deleted=1;
            $testimonio->save();
            return redirect('admin/testimonios');
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