<?php

namespace App\Http\Controllers;

use App\Models\Service_center;
use Illuminate\Http\Request;

class ServiceCenterController extends Controller
{
    public function List(){
        $service_list=Service_center::paginate(6);
        return view('backend.pages.service center.servicescenter', compact('service_list'));
    }

    public function Make(){
        return view('backend.pages.service center.makes');
    }

    public function Form(Request $request){
        
        $request->validate([
            'name'=>'required',
            'phone'=>'required|unique:service_centers',
            'email'=>'required|email',
            'phone'=>'required',
            'location'=>'required',
            'image'=>'required'
            ]);

        $imageFile=null;
        if($request->hasFile('image'))
        {
            $imageFile=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$imageFile);
        }

        Service_center::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'location'=>$request->location,
            'service_type'=>$request->service_type,
            'service_hour'=>$request->service_hour,
            'password'=>$request->password,
            'image'=>$imageFile

        ]);
        return redirect()->back()->with('message','Added new service center');
    }

    public function Delete($id)
    {
        $sCenter_list=Service_center::find($id);
        if($sCenter_list)
        {
            $sCenter_list->delete();
            return redirect()->back()->with('message','Service Center deleted successfully');
        }
        else
        {
            return redirect()->back()->with('error','Service center not found');
        }
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
