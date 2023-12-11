<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagary;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CatagoryController extends Controller
{
    public function index(){
        return view('catagory.createCatagory');
    }
    public function store(Request $request){
        $catagary= new catagary;
        $catagary->icon=$request['icon'];
        if($request->hasFile('icon')) {
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $request->file('icon')->storeAs('icon/',$name);
            $file->move(public_path('icon/'),$name);
            $catagary->icon = $name;
            $catagary->save();
        }    
        $catagary->title=$request['title'];
        $catagary->save();
        }
            

       public function show(){
        $catagary=catagary::all();

        return view('catagory.catagory', compact('catagary'));
       }

       public function delete($id){
      
        $catagary=catagary::find($id)->delete();
        return redirect('catagory.catagorydelete');
       
  }
  
}
