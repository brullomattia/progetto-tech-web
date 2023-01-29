<?php

namespace App\Http\Controllers;

use App\Models\User;
use DOMDocument;
use Illuminate\Http\Request;

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

    public function update($id, Request $request)
    {   
        
        $user = User::find($id);
        
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        $user -> save();

        session()->flash('success', 'L utente è stato modificato con successo!');

        return redirect('users_management');
    }
}
