<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        auth()->user();
        return view('Profile');
    }

    public function update(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'. auth()->user()->id,
        ]);
       // dd($request);
       auth()->user()->name = $request->name; 
       auth()->user()->email = $request->email; 
       auth()->user()->save();

       return redirect()->route('dashboard');
    }
}
