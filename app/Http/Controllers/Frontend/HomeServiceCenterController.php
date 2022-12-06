<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Brand;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeServiceCenterController extends Controller
{
    public function List()
    {
        $serviceCenter=User::where('role', 'service_center')->where('country', 'bangladesh')->get();
        return view('frontend.pages.serviceCenter', compact('serviceCenter'));
    }

    public function View($service_center_id)
    {
        $serviceCenter=User::find($service_center_id);
        $serviceList=Service::where('service_center_id', $serviceCenter->id)->get();
        return view('frontend.pages.webServiceCenter.view',compact('serviceCenter','serviceList'));
    }

    public function BookingView($booking_id)
    {
        $brandList=Brand::all();
        $serviceData=Service::where('id',$booking_id)->with('user')->first();
        // dd($serviceData);

        return view('frontend.pages.booking', compact('serviceData', 'brandList'));
    }

    public function Store(Request $request)
    {
        Booking::create([
            'Customer_name'=>$request->Customer_name,
            'phone'=>$request->phone,
            'service_center_id'=>$request->service_center_id,
            'brand_id'=>$request->brand_id,
            'model'=>$request->model,
            'service_id'=>$request->service_id,
            'special_request'=>$request->special_request,
            'user_id'=>auth()->user()->id,
            'address'=>auth()->user()->address,
            'address_1'=>$request->address_1
        ]);

        notify()->success('Booking successfully!');
        return redirect()->route('customer.booking');
    }

}

