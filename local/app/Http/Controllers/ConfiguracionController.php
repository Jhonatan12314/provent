<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Configuracion;

class ConfiguracionController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
        $configuracion=Configuracion::first();
        return view('admin/configuracion/index')->with('configuracion',$configuracion)->with('route','configuracion');
    }

    public function create(Request $request)
    {
        $configuracion=Configuracion::first();
        if(!$configuracion)
        {
             $configuracion=new Configuracion;
        }

         $configuracion->facebook=$request->facebook;
        $configuracion->twitter=$request->twitter;
        $configuracion->youtube=$request->youtube;
        $configuracion->pinterest=$request->pinterest;
        $configuracion->skype=$request->skype;
        $configuracion->whatsapp=$request->whatsapp;
        $configuracion->linkedin=$request->linkedin;
        $configuracion->google=$request->google;
        $configuracion->instagram=$request->instagram;

        $configuracion->historia=$request->historia;
        $configuracion->mision=$request->mision;
        $configuracion->vision=$request->vision;
        $configuracion->objetivos=$request->objetivos;
        $configuracion->valores=$request->valores;
        $configuracion->imagen=$request->imagen;

        $configuracion->direccion=$request->direccion;
        $configuracion->email=$request->email;
        $configuracion->telefono=$request->telefono;

        $configuracion->save();
        



        return redirect('admin/configuracion');

    }

     public function popup()
    {
        $configuracion=Configuracion::first();
        return view('admin/popup/index')->with('configuracion',$configuracion)->with('route','popup');
    }

    public function postPopUp(Request $request)
    {
        
        $configuracion=Configuracion::first();
        if(!$configuracion)
        {
             $configuracion=new Configuracion;
        }

        $configuracion->popup=$request->descripcion;

        if(isset($request->activo))
        {
            $configuracion->popupactivo=1;
        }else{
            $configuracion->popupactivo=0;
        }

        $configuracion->save();
        

        return redirect('admin/popup');
    }


    
}