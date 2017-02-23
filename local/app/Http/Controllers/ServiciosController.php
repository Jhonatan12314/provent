<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Servicios;

class ServiciosController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
        $servicios=Servicios::where('deleted','=',0)->get();
        return view('admin/servicios/index')->with('servicios',$servicios)->with('route','servicios');
    }

    public function getCreate(Request $request)
    {
        $servicios=Servicios::where('deleted','=',0)->get();
        return view('admin/servicios/create')->with('servicios',$servicios)->with('route','servicios');
    }

    public function create(Request $request)
    {
        $servicio=new Servicios;
        $servicio->nombre=$request->nombre;
        $servicio->descripcion=$request->descripcion;

        $file = $request->file('imagen');
        $servicio->deleted=0;

       if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('servicios')->put($imageName ,File::get($file));
            $servicio->imagen="public/upload/servicios/".$imageName;
        }else
        {
            $servicio->imagen="";
        }


        $servicio->save();
        return redirect('admin/servicios');

    }

    public function getUpdate($id)
    {
        $servicio=Servicios::find($id);
        $servicios=Servicios::where('deleted','=',0)->get();
        return view('admin/servicios/create')->with('servicio',$servicio)->with('servicios',$servicios)->with('route','servicios');
    }

    public function update(Request $request)
    {
        $servicio=Servicios::find($request->id);
        $servicio->nombre=$request->nombre;
        $servicio->descripcion=$request->descripcion;

        $file = $request->file('imagen');
            
            if($file)
                {
                    $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
                    Storage::disk('servicios')->put($imageName ,File::get($file));
                    File::Delete($servicio->imagen);
                    $servicio->imagen="public/upload/servicios/".$imageName;

                }


        $servicio->save();
        return redirect('admin/servicios');
    }

    public function delete($id)
    {
        $servicio=Servicios::find($id);
        if($servicio)
        {
            $servicio->deleted=1;
            $servicio->save();
            return redirect('admin/servicios');
        }else{
            return redirect('admin/servicios');
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