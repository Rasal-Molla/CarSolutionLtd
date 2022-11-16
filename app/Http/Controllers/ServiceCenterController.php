<?php

namespace App\Http\Controllers;

use App\Models\Service_center;
use Illuminate\Http\Request;

class ServiceCenterController extends Controller
{
    public function List(){
        $service_list=Service_center::paginate(3);
        return view('backend.pages.service center.servicescenter', compact('service_list'));
    }

    public function Make(){
        return view('backend.pages.service center.makes');
    }

    public function Form(Request $request){
        
        $request->validate([
            
            'phone'=>'required|unique:service_centers',
            'email'=>'required|email',
            'phone'=>'required',
            'location'=>'required'
            ]);

        Service_center::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'location'=>$request->location,
            'service_type'=>$request->service_type,
            'service_hour'=>$request->service_hour

        ]);
        return redirect()->back()->with('message','Added new service center');
    }

    public function Total(){
        return view('backend.pages.service center.totals');
    }

    public function Pending(){
        return view('backend.pages.service center.pendings');
    }

    public function Ratting(){
        return view('backend.pages.service center.rattings');
    }
}
