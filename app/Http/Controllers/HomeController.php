<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){

	    $main = view('pages.main');
	       return view('home')
	         ->with('main',$main);
    }

    public function about_aub(){

	    $about_aub = view('pages.about_aub');
	       return view('home')
	         ->with('about_aub',$about_aub);
    }
    public function contact(){

	    $contact = view('pages.contact');
	       return view('home')
	         ->with('contact',$contact);
    }
    
}
