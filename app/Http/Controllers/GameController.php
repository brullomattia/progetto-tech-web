<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function memory()
    {
        return view('memory');
    }

    public function quiz()
    {
        return view('quiz');
    }

    public function curiosity()
    {
        return view('curiosity');
    }

    public function animal_video()
    {
        return view('animal_video');
    }

}
