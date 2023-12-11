<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\service;

class ServiceController extends Controller
{
    public function index(){

        return view('services.add_service');

    }
    public function store(Request $request){

        $service=new service();

        $service->icons=$request['icons'];
        if($request->hasFile('icons')) {
            $file=$request->file('icons');
            $name=$file->getClientOriginalName();
            $request->file('icons')->storeAs('icons/',$name);
            $file->move(public_path('icons/'),$name);
            $service->icons = $name;
            // $service->save();
        }    
        $service->title=$request['title'];
        $service->price=$request['price'];
       
        $service->save();

    }

    public function view(){
        $service=service::all();
        return view('services.show_service', compact('service'));
    }
    public function show(){
        $service=service::all();
        return view('services.show', compact('service'));
    }
    public function delete($id){
        $service=service::find($id)->delete();
        return redirect('listservice');

    }
    public function edit($id){
        $service=service::find($id);
        
        if(is_null($service)){
            //not found
            return view('services.show_service');
        }else{
            //found
            $title="Service Update";
            $url=url('/updateservice')."/".$id;
            return view('services.update_service', compact('service','url','title'));
        }

      
    }
    public function update($id, Request $request){
        $service=service::find($id);
        $service->icons=$request['icons'];
        if($request->hasFile('icons')) {
            $file=$request->file('icons');
            $name=$file->getClientOriginalName();
            $request->file('icons')->storeAs('icons/',$name);
            $file->move(public_path('icons/'),$name);
            $service->icons = $name;
            // $service->save();
        }    
        $service->title=$request['title'];
        $service->price=$request['price'];
       
        $service->save();

        return redirect('listservice');

    }
}
