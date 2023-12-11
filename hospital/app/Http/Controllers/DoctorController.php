<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    public function index(){

    }
    public function store(Request $request){

        $doctor=new doctor;

        $doctor->picture=$request['picture'];

        if($request->hasFile('picture')) {
            $file=$request->file('picture');
            $name=$file->getClientOriginalName();
            $request->file('picture')->storeAs('picture/',$name);
            $file->move(public_path('picture/'),$name);
            $doctor->picture = $name;
            // $doctor->save();
        }

        $doctor->national_id=$request['national_id'];
        $doctor->first_name=$request['first_name'];
        $doctor->last_name=$request['last_name'];
        $doctor->email=$request['email'];
        $doctor->educational_qualification=$request['education'];
        $doctor->specialist=$request['specialist'];
        $doctor->medical_degree=$request['madical_degree'];
        $doctor->address=$request['address'];
        $doctor->phone=$request['phone'];
        $doctor->birth_date=$request['date_of_birth'];
        $doctor->gender=$request['gender'];
        $doctor->type=$request['type'];
        $doctor->biography=$request['biography'];
        $doctor->full_biography=$request['full_biography'];
        $doctor->blood_group=$request['blood_group'];
        $doctor->emergency=$request['emergency'];

        $doctor->password=$request['password'];
        $doctor->save();
        // echo 'data submit';
        return back();



    }




}
