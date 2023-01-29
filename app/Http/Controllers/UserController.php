<?php

namespace App\Http\Controllers;

use App\Models\User;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function updateUser(Request $request){   
        
        $user = User::find(auth()->user()->id);

        request()->validate([
            'password' => 'required|max:255',
            'email' => 'required|email|min:7|max:255|unique:users'
        ]);
        
        $user->update([
            'email' => $request->email,
            'updated_at' => now()
        ]);

        $user -> save();

        session()->flash('success', 'Le informazioni dell utente sono state modificate con successo!');

        return redirect('home_front');
    }

    public function updatePassword(Request $request){
        
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ]);
        //dd($request->old_password);

        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('home_front')->with("success", "Password changed successfully!");
}
}
