<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function pics(){
        return view('pictures');
    }
    
}
