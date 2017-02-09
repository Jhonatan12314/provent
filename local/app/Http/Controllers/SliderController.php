<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Slider;

class SliderController extends Controller
{

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex()
    {
        $sliders=Slider::where('deleted','=',0)->get();
        return view('admin/sliders/index')->with('sliders',$sliders)->with('route','sliders');
    }

    public function getCreate(Request $request)
    {
        return view('admin/sliders/create')->with('route','sliders');
    }

    public function create(Request $request)
    {
        $slider=new Slider;
        $slider->descripcion=$request->descripcion;
        $slider->imagen=$request->imagen;
        $slider->save();
        return redirect('admin/sliders');

    }

    public function getUpdate($id)
    {
        $slider=Slider::find($id);
        return view('admin/sliders/create')->with('slider',$slider)->with('route','sliders');
    }

    public function update(Request $request)
    {
        $slider=Slider::find($request->id);
        $slider->descripcion=$request->descripcion;
        $slider->imagen=$request->imagen;
        $slider->save();
        return redirect('admin/sliders');
    }

    public function delete($id)
    {
        $slider=Slider::find($id);
        if($slider)
        {
            $slider->deleted=1;
            $slider->save();
            return redirect('admin/sliders');
        }else{
            return redirect('admin/sliders');
        }
        
    }



    
}