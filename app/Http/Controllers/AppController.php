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
}
