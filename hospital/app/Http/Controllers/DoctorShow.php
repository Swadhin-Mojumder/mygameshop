<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;

class DoctorShow extends Controller
{

    public function index(){
        return view('themeLayout.master');
    }
    public function appointment(){
        $doc=doctor::all();
        return view('appointment.appointmentFrom',compact('doc'));
    }
    public function appointmentshow(){
        return view('appointment.appointmentshow');
    }
    public function doctor(){
        $doctor=doctor::all();
        $url=url('/doctor');
        $title="Registration";
        return view('doctor.add_doctor', compact('url','title','doctor'));
    }
    public function edit($id){


        $doctor=doctor::find($id);

        if(is_null($doctor)){
            //not found
            return view('doctor.doctor_list');
        }else{
            //found
            $title="Update";
            $url=url('/updatedoctor')."/".$id;
            return view('doctor.update_doctor', compact('doctor','url','title'));
        }

    }





    public function show(){
        $doctor=doctor::all();

        return view('doctor.doctorshow',compact('doctor'));
    }
    public function list(){
        $doctor=doctor::all();

        return view('doctor.doctor_list',compact('doctor'));
    }
    public function delete($id){
        $doctor=doctor::find($id)->delete();

        return redirect()->back();


    }

    public function update($id, Request $request){
        $doctor=doctor::find($id);


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
        $doctor->save();
        return redirect('listdoctor');

    }
    public function show2($id){


        $doctor=doctor::find($id);


            return view('doctor.doc_details', compact('doctor'));


    }


}
