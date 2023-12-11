<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;
use App\Models\catagary;

class CatagorydeController extends Controller
{
    public function index(){
      
        $catagary=catagary::all();
        return view('catagoryshow',compact('catagary'));
       
  }
    public function delete($id){
      
        $catagary=catagary::find($id)->delete();
        
          return redirect()->back();
       
  }
  public function edit($id){
        

    $catagary= catagary::find($id);

    if(is_null($catagary)){
        //not found
        return view('catagory.catagorydelete');
    }else{
        //found
        $title="Catagory Update";
        $url=url('/updatecatagory')."/".$id;
        return view('catagory.catagoryupdate', compact('catagary','url','title'));
    }

}
    public function update($id,Request $request){

        $catagary= catagary::find($id);
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

        return redirect('catagoryall');


    }
}
