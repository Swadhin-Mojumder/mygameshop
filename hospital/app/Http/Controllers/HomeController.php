<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;

class HomeController extends Controller
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
        return view('doctor.add_doctor');
    }
    public function edit($id){


        $doctor=doctor::find($id);

        if(is_null($doctor)){
            //not found
            return view('doctor.doctor_list');
        }else{
            //found

            return view('doctor.add_doctor', compact('doctor'));
        }

    }
}
