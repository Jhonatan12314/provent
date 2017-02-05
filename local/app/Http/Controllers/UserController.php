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
        $password=$request->password;
        $user= $request->user;
        $users=User::where('user','=',$user)->get();
        if(count($users)>0)
        {
            foreach($users as $user)
            {
                if(Crypt::decrypt($user->password)==$password)
                {
                    session_start();
                    $_SESSION['user'] = $user;
                    //die($_SESSION['user'] );
                    return redirect('/admin/index');
                }
            }
            return redirect('/admin?error=1');
        }else{
            return redirect('/admin?error=1');
        }

    }

    public function logout()
    {
        session_destroy();
        return redirect('/');
    }

    public function createUser(){
        $user=new User;
        $user->user="pr0jectmenta";
        $user->password= Crypt::encrypt("Drag0nflies!");
        $user->name="Admin";
        $users=User::where('user','=','pr0jectmenta')->first();
        if(count($users)==0)
        {
            $user->save();
            echo "DONE!";
        }
        
    }

    
}