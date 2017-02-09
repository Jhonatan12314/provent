<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use App\User;

class UserController extends Controller
{

    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }


    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getlogin()
    {
       
        return view('admin/login');
    }

    public function login(Request $request)
    {
       return view('admin/index');       
    }

     public function dashboard(Request $request)
    {
       return view('admin/index')->with('route','dashboard');       
    }

    public function logout()
    {
    }

    public function createUser(){
    }

    
}