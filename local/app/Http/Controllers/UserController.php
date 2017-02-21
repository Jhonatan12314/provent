<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use App\Cliente;

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
        if (Auth::check()) {
             return redirect()->intended('admin/dashboard');
        }else{
            return view('admin/login');
        }
       
        
    }

    public function postlogin(Request $request)
    {
         if (Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password])) {
            return redirect()->intended('admin/dashboard');
        }else{
            return redirect()->back()->with('error', ['Usuario o contraseña incorrecto']);
        }
    }

    public function login(Request $request)
    {
       return view('admin/index');       
    }

     public function dashboard(Request $request)
    {
        $clientes=Cliente::where('deleted','=',0)->count();
        $productos=Producto::where('deleted','=',0)->count();
       return view('admin/index')->with('route','dashboard')->with('productos',$productos)->with('clientes',$clientes);       
    }

    public function logout()
    {
        Auth::logout();
         return redirect()->intended('/index');
    }

    public function createUser(){
        $user=new User;
        $user->usuario="Veagn";
        $user->password=  Hash::make("S4r_4i0502");
        $user->nombre="Admin";
        $user->email="contacto@veagn.com";
        $users=User::where('usuario','=','admin')->first();
        if(count($users)==0)
        {
            $user->save();
            echo "DONE!";
        }
    }

    
}