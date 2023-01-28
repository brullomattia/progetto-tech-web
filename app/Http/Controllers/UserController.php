<?php

namespace App\Http\Controllers;

use App\Models\User;
use DOMDocument;

class UserController extends Controller
{
    public function updateMemory(){
        
        $user = User::find(auth()->user()->id);
        // Make sure you've got the user model
        if($user) {
            $user->memory_points += 8;
            $user->save();
        }
        return redirect()->route('memory');;
       
    }

    public function updateQuiz(){
        
        $user = User::find(auth()->user()->id);
        // Make sure you've got the user model
        if($user) {
            $user->quiz_points += 10;
            $user->save();
        }
        return redirect()->route('quiz');;
       
    }

    public function delete($id){
        $user = User::find($id);

        $user?->delete();

        return redirect()->route('showUsers_management');;
    }
}
