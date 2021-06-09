<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //

    public function register(){
        return view ('registration');
    }
    
    public function store(Request $request){ 
        /*Accessing the request from the registration form */

        //validate the user 
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);
        //store the user 
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // sign in user 
        auth()->attempt($request->only('email','password'));

        //redirect 
        return redirect()->route('dashboard');
        }
}
