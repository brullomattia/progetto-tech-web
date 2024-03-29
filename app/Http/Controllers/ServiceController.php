<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function store(Request $request){
        $data= new Service();



        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;

            $data['type'] = $request->type;
            $data['nome'] = $request->nome;
            $data['email'] = $request->email;
            $data['description'] = $request->description;
            $data['tel'] = $request->tel;
        }
        $data->save();

        session()->flash('success', 'Il servizio è stato inserito correttamente ed è in fase di approvazione dagli admin');

        //$imageData = Post::all();
        return redirect()->route('showAggiungiServizio');

    }

    public function delete($id){

        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }

        $service = Service::find($id);

        $service?->delete();

        return redirect()->route('showServices_management');
    }

    public function approve($id){

        if(auth()->user()?->email != 'admin@mail.it' ){
            abort(403);
        }

        $service = Service::find($id);
        if($service != null){
            $service->approved = true ;
        }
        $service?->save();
        return redirect()->route('showServices_management');
    }
}
