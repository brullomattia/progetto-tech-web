<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showShowcase(){
        return view('showcase');
    }
    public function showServices(){
        return view('services');
    }

    public function showLeaderBoard(){
        return view('leaderboard');
    }
    public function showAggiungiServizio(){
        return view('aggiungiServizio');
    }

}
