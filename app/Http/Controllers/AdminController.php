<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsers_management(){
        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }

        return view('users_management');
    }
    public function showServices_management(){
        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }

        return view('services_management');
    }
    public function showShowcase_management(){

        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }
        
        return view('showcase_management');
    }

}
