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
        $sliders=SLider::where('deleted','=',0)->get();
        return view('admin/sliders/create')->with('sliders',$sliders)->with('route','sliders');
    }

    public function create(Request $request)
    {
        $slider=new Slider;
        $slider->descripcion=$request->descripcion;
        $slider->imagen=$request->imagen;

        $file = $request->file('imagen');
        
     if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('sliders')->put($imageName ,File::get($file));
            $slider->imagen="public/upload/sliders/".$imageName;
        }else
        {
            $slider->imagen="";
        }

        $slider->save();
        return redirect('admin/sliders');

    }

    public function getUpdate($id)
    {
        $slider=Slider::find($id);
        $sliders=Slider::where('deleted','=',0)->get();
        return view('admin/sliders/create')->with('slider',$slider)->with('sliders',$sliders)->with('route','sliders');
    }

    public function update(Request $request)
    {
        $slider=Slider::find($request->id);
        $slider->descripcion=$request->descripcion;
        $slider->imagen=$request->imagen;

        $file = $request->file('imagen');
            
            if($file)
                {
                    $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
                    Storage::disk('sliders')->put($imageName ,File::get($file));
                    File::Delete($slider->imagen);
                    $slider->imagen="public/upload/sliders/".$imageName;

                }

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