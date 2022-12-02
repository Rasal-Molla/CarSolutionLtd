<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SCServiceController extends Controller
{
    public function List()
    {
        $serviceList=Service::where('service_center_id',auth()->user()->id)->get();
        return view('frontend.pages.servicecenter..service.service', compact('serviceList'));
    }

    public function Form()
    {
        return view('frontend.pages.servicecenter.service.create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'service_name'=>'required',
            'price'=>'required',
            'status'=>'required'
        ]);

        $serviceImage=null;
        if($request->hasFile('image'))
        {
            $serviceImage=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $serviceImage);
        }
        Service::create([
            'service_name'=>$request->service_name,
            'price'=>$request->price,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$serviceImage,
            'service_center_id'=>auth()->user()->id
        ]);

        notify()->success('Service Added successfully!');
        return redirect()->route('scservice.list');
    }

    public function UpdateForm($service_list)
    {
        $serviceData=Service::find($service_list);
        return view('frontend.pages.servicecenter.service.edit',compact('serviceData'));
    }

    public function UpdateStore(Request $request, $service_id)
    {
        $list=Service::find($service_id);
        $serviceImage=$list->image;
        if($request->hasFile('image'))
        {
            $removeFile=public_path().'/uploads/'. $serviceImage;
            File::delete($removeFile);
            $serviceImage=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $serviceImage);
        }
        $list->update([
            'service_name'=>$request->service_name,
            'price'=>$request->price,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$serviceImage,
        ]);

        notify()->success('Service update successfully!');
        return redirect()->route('scservice.list');
    }

    public function Delete($service_delete)
    {
        $delete=Service::find($service_delete);
        if($delete)
        {
            $delete->delete();
            notify()->success('Service delete successfully!');
            return redirect()->back();
        }
        else
        {
            notify()->error('Service not found!');
            return redirect()->back();
        }
    }
}
