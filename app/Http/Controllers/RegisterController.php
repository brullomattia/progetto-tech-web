<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(){
        //create the user
        $attributes = request()->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'password' => 'required|max:255',
            'email' => 'required|email|min:7|max:255|unique:users'
        ]);

        //$attributes['password'] = bcrypt($attributes['password']);
        $user= User::create($attributes);
        
        //log the user 
        auth()->login($user);

        return redirect('/')->with('success', 'Il tuo account è stato creato correttamente!');
       
    }

    
}
