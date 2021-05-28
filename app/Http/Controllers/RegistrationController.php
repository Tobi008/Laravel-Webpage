<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    public function register(){
        return view ('registration');
    }
    public function store(Request $request /*Accessing the request from the registration form */ ){ 
        $input = $request->all();
        print_r($input); // Output the form data    
    }
}
