<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(){
        //validate request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
            
        ]);
        //dd($attributes);
        //authenticate the user
        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' =>'Your provided credentials could not be verified', 
                
            ]);
            
            
        }
        session()->regenerate();
        
        return redirect('/');//->with('success','Welcome, back!!');

    }

    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    
    
}
