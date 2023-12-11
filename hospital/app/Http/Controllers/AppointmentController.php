<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\appointment;

class AppointmentController extends Controller
{



    public function store(Request $request){

        $appointment=new appointment;

        $appointment->name=$request['name'];
        $appointment->email=$request['email'];
        $appointment->phone=$request['phone'];
        $appointment->doctor_name=$request['select_doctor'];
        $appointment->gender=$request['gender'];
        $appointment->phone=$request['phone'];
        $appointment->date=$request['date'];
        $appointment->message=$request['message'];
        $appointment->save();
        return redirect('appointmentadd');
    }

    public function delete($id){

        $appointment=appointment::find($id)->delete();
        return redirect('appointmentshow');

  }

}
