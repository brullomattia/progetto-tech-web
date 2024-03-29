<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{


        public function store(Request $request){
            $data= new Post();



            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/Image'), $filename);
                $data['image']= $filename;
                $data['user_id']= auth()->user()->id;
                $data['text'] = $request->text;
            }
            $data->save();

            //$imageData = Post::all();
            return redirect()->route('showShowcase');;

        }

        public function delete($id){

            if(auth()->user()?->email != 'admin@mail.it' ){
                abort(403);
            }

            $post = Post::find($id);

            $post?->delete();

            return redirect()->route('showShowcase_management');;
        }



}
