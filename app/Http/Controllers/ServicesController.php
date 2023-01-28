<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showVeterinario(){
        return view('veterinario');
    }
    public function showToelettatura(){
        return view('toelettatura');
    }
    public function showDogSitter(){
        return view('dogSitter');
    }
    public function showVisitaDomicilio(){
        return view('visitaDomicilio');
    }
   
   

}