<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Cliente;

class ClientesController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
   public function getIndex()
    {
        $clientes=Cliente::where('deleted','=',0)->whereNotNull('imagen')->get();
        return view('admin/clientes/index')->with('clientes',$clientes)->with('route','clientes');
    }

    public function getCreate(Request $request)
    {
        $clientes=Cliente::where('deleted','=',0)->get();
        return view('admin/clientes/create')->with('clientes',$clientes)->with('route','clientes');
    }

    public function create(Request $request)
    {
        $cliente=new Cliente;
        $cliente->nombre=$request->nombre;
        $cliente->estado=$request->estado;
        $cliente->telefono=$request->telefono;
        $cliente->email=$request->email;

        $file = $request->file('imagen');

       if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('clientes')->put($imageName ,File::get($file));
            $cliente->imagen="public/upload/clientes/".$imageName;
        }else
        {
            $cliente->imagen="";
        }



        $cliente->save();
        return redirect('admin/clientes');

    }

    public function getUpdate($id)
    {
        $cliente=Cliente::find($id);
        $clientes=Cliente::where('deleted','=',0)->get();
        return view('admin/clientes/create')->with('cliente',$cliente)->with('clientes',$clientes)->with('route','clientes');
    }

    public function update(Request $request)
    {
        $cliente=Cliente::find($request->id);
        $cliente->nombre=$request->nombre;
        $cliente->estado=$request->estado;
        $cliente->telefono=$request->telefono;
        $cliente->email=$request->email;

         $file = $request->file('imagen');
            
            if($file)
                {
                    $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
                    Storage::disk('clientes')->put($imageName ,File::get($file));
                    File::Delete($cliente->imagen);
                    $cliente->imagen="public/upload/clientes/".$imageName;

                }

        $cliente->save();
        return redirect('admin/clientes');
    }

    public function delete($id)
    {
        $cliente=Cliente::find($id);
        if($cliente)
        {
            $cliente->deleted=1;
            $cliente->save();
            return redirect('admin/clientes');
        }else{
            return redirect('admin/clientes');
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