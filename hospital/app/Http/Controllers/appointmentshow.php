<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;

class appointmentshow extends Controller
{
  public function index(){
    $appointment=appointment::all();
   
    return view('appointment.appointmentshow', compact('appointment'));
  }

}
