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
        $clientes=Cliente::where('deleted','=',0)->get();
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



    
}