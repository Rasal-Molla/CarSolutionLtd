<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function List(){

        $service_list=Service::all();
        return view('backend.pages.service.services', compact('service_list'));
    }

    public function Create(){
        return view('backend.pages.service.makes');
    }

    public function Form(Request $request){

        //dd($request->all());
        $request->validate([

            'service_name'=>'required',
            'price'=>'required|numeric',
            'status'=>'required',
            'image'=>'required'

        ]);

        $fileName=null;
        if($request->hasFile('image'))
        {
            $fileName=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }
        //dd($imageName);

        Service::create([

            'service_name'=>$request->service_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$fileName
        ]);
        
        return redirect()->back()->with('message','Service added successfully');
    }
    
}
