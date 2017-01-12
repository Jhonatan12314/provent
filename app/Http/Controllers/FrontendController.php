<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class FrontendController extends Controller
{
    public function getIndex(){

    	return view('frontend/index');
}
 public function getContact(){

    	return view('frontend/contact');
}
public function getShop(){

    	return view('frontend/shop');
}
public function getAbout(){

    	return view('frontend/about');
}
public function getNews(){

    	return view('frontend/news');
}
public function getSolutions(){

    	return view('frontend/solutions');
}
public function getProjects(){

    	return view('frontend/projects');
}

}
