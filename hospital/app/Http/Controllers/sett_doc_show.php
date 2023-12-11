<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\doctor;

class sett_doc_show extends Controller
{
    public function index(){

        $setting=setting::all();
        $doctor=doctor::all();

       

    return view('themeLayout.master', compact('setting','doctor'));


    }

    public function show(){

        $setting=setting::all();
        return view('settings.settingshow', compact('setting'));


    }
    public function delete($id){

        $setting=setting::find($id)->delete();

        return redirect()->back();
        


    }

    public function edit($id){

        $setting=setting::find($id);

        if(is_null($setting)){
            //not found
            return view('settings.settingshow');
        }else{
            //found
            $title="Setting Update";
            $url=url('/settingupdate')."/".$id;
            return view('settings.settingupdate', compact('setting','url','title'));
        }
        


    }

    public function update($id, Request $request){
        $setting=setting::find($id);
       

        $setting->logo=$request['logo'];
        if($request->hasFile('logo')) {
            $file=$request->file('logo');
            $name=$file->getClientOriginalName();
            $request->file('logo')->storeAs('logo/',$name);
            $file->move(public_path('logo/'),$name);
            $setting->logo = $name;
            $setting->save();
        }  
        $setting->medile=$request['medile'];
        if($request->hasFile('medile')) {
            $file=$request->file('medile');
            $name=$file->getClientOriginalName();
            $request->file('medile')->storeAs('medile/',$name);
            $file->move(public_path('medile/'),$name);
            $setting->medile = $name;
            $setting->save();
        }  
        $setting->head=$request['head'];
        if($request->hasFile('head')) {
            $file=$request->file('head');
            $name=$file->getClientOriginalName();
            $request->file('head')->storeAs('head/',$name);
            $file->move(public_path('head/'),$name);
            $setting->head = $name;
            $setting->save();
        }  
        $setting->bottom=$request['bottom'];
        if($request->hasFile('bottom')) {
            $file=$request->file('bottom');
            $name=$file->getClientOriginalName();
            $request->file('bottom')->storeAs('bottom/',$name);
            $file->move(public_path('bottom/'),$name);
            $setting->bottom = $name;
            $setting->save();
        }  
        $setting->clint=$request['clint'];
        if($request->hasFile('clint')) {
            $file=$request->file('clint');
            $name=$file->getClientOriginalName();
            $request->file('clint')->storeAs('clint/',$name);
            $file->move(public_path('clint/'),$name);
            $setting->clint = $name;
            $setting->save();
        }  
        $setting->email=$request['email'];
        $setting->contect_number=$request['phone'];
        $setting->save();
        return redirect('show');

    }
 
}
