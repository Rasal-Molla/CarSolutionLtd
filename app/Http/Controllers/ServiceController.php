<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function Delete($service_id)
    {
        $service_delete=Service::find($service_id);
        if($service_delete)
        {
            $service_delete->delete();
            notify()->success('Service Delete successfully');
            return redirect()->back();
        }
        else
        {
            notify()->error('No service found');
            return redirect()->back();
        }
    }

    public function Edit($service_id)
    {
        $service_list=Service::find($service_id);
        return view('backend.pages.service.edit', compact('service_list'));
    }

    public function Update(Request $request, $service_id)
    {
        $service_list=Service::find($service_id);
        //dd($service_list);
        $fileName=$service_list->image;
        if($request->hasFile('image'))
        {
            $removeFile  = public_path().'/uploads/'.$fileName;
            File::delete($removeFile);
            $fileName=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }
        //dd($imageName);

        $service_list->update([

            'service_name'=>$request->service_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$fileName
        ]);

        notify()->success('Service updated successfully','Done');
        return redirect()->route('service');
    }

}
