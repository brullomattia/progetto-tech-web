<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home_game()
    {
        return view('home_game');
    }

    public function home_front()
    {
        return view('home_front');
    }

    public function home_back()
    {
        return view('home_back');
    }

    public function home_admin()
    {

        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }
        return view('home_admin');
    }

    public function edit_user($id)
    {
        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }
        return view('edit_user', [$id]);
    }
    
    public function gestione_account(){
        
        return view('gestione_account');
    }
}
