<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsers_management(){
        return view('users_management');
    }
    public function showServices_management(){
        return view('services_management');
    }

}
