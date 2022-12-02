<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Brand;
use App\Models\Service;
use App\Models\Service_center;
use Illuminate\Http\Request;

class CustomerBookingController extends Controller
{
    public function BookingInfo()
    {
        $bookingList=Booking::where('customer_id', auth()->user()->id)->get();
        return view('frontend.pages.customer.booking.booking', compact('bookingList'));
    }

    public function Form()
    {
        $service_center=Service_center::all();
        $service=Service::all();
        $brand=Brand::all();
        return view('frontend.pages.customer.booking.form', compact('service_center','service','brand',));
    }

    public function Store(Request $request)
    {
        $request->validate([
            'model'=>'required',
            'special_request'=>'required'
        ]);

        Booking::create([
            'customer_name'=>$request->customer_name,
            'phone'=>$request->phone,
            'service_center'=>$request->service_center,
            'brand'=>$request->brand,
            'model'=>$request->model,
            'service'=>$request->service,
            'special_request'=>$request->special_request,
            'customer_id'=>auth()->user()->id
        ]);

        notify()->success('Booking successfully!');
        return redirect()->route('customer.booking');
    }
}
