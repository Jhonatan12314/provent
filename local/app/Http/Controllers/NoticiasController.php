<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Producto;

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
       return view('admin/noticias/index');
    }

    public function getCreate(Request $request)
    {
        return view('admin/noticias/create');

    }

    public function create(Request $request)
    {


    }

    public function getUdate(Request $request)
    {
        return view('admin/noticias/create');

    }

    public function update(Request $request)
    {


    }

    public function delete(Request $request)
    {


    }


    
}