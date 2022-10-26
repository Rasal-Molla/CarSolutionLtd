<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function Appoint(){
        return view('backend.pages.appointments');
    }
}
