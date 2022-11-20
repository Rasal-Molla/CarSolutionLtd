<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Service;

class AppointmentController extends Controller
{
    public function Appoint(){

        $list=Appointment::paginate(5);
        return view('backend.pages.appointment.appointments', compact('list'));
    }

    public function Create(){

        $list=Category::all();
        $brand_list=Brand::all();
        $service_list=Service::all();
        return view('backend.pages.appointment.create',compact('list','brand_list','service_list'));
    }

    public function Form(Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'service_id'=>'required'
        ]);

        Appointment::create([

            'name'=>$request->name,
            'phone'=>$request->phone,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'service_id'=>$request->service_id

        ]);

        return redirect()->back()->with('message','Form submited successfully');

    }
}


