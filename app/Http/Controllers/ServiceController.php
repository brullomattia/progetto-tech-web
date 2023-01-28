<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        return view('service');
    }

    public function store(){
        //create the service
        $attributes = request()->validate([
            'nome' => 'required|min:5|max:255',
            'email' => 'required|email|min:7|max:255',
            'description' => 'required|min:7|max:255',
            'telNumber' => 'required|numeric|min:10',
            'type' => 'required|min:5|max:255',
            
        ]);

        //$attributes['password'] = bcrypt($attributes['password']);
        $service= Service::create($attributes);
        
        //log the user 
        //auth()->login($user);

        return redirect('/')->with('success', 'Your service has been submitted!');
       
    }
}
