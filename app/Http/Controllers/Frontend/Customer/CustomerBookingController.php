<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Brand;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerBookingController extends Controller
{
    public function BookingInfo()
    {
        $bookingList=Booking::where('user_id', auth()->user()->id)->with('serviceCenter')->get();

        // dd($bookingList);
        return view('frontend.pages.customer.booking.booking', compact('bookingList'));
    }

    public function Form()
    {
        $service_center=User::where('role','service_center')->get();
        $service=Service::all();
        $brand=Brand::all();
        return view('frontend.pages.customer.booking.form', compact('service_center','service','brand',));
    }

    public function Store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'model'=>'required',
        ]);

        Booking::create([
            'Customer_name'=>auth()->user()->name,
            'phone'=>auth()->user()->phone,
            'service_center_id'=>$request->service_center,
            'brand_id'=>$request->brand,
            'model'=>$request->model,
            'service_id'=>$request->service,
            'address'=>auth()->user()->address,
            'address_1'=>$request->addresa_1,
            'special_request'=>$request->special_request,
            'user_id'=>auth()->user()->id
        ]);

        notify()->success('Booking successfully!');
        return redirect()->route('customer.booking');

    }

    public function Edit($booking_id)
    {
        $service_center=User::where('role', 'service_center')->get();
        $service=Service::all();
        $brand=Brand::all();
        $booking = Booking::find($booking_id);
        return view('frontend.pages.customer.booking.edit', compact('service_center','service','brand','booking'));
    }

    public function Update(Request $request, $booking_id)
    {
        $bookingUpdate=Booking::find($booking_id);
        $bookingUpdate->update([

            'service_center_id'=>$request->service_center,
            'brand_id'=>$request->brand,
            'service_id'=>$request->service,
            'model'=>$request->model,
            'special_request'=>$request->special_request

        ]);

        notify()->success('Booking Updated!');
        return redirect()->route('customer.booking');
    }

    public function Delete($booking_id)
    {
        $delete=Booking::find($booking_id);
        if($delete)
        {
            $delete->delete();
            notify()->success('Delete Successfully!');
            return redirect()->back();
        }
        else
        {
            notify()->error('No booking found!');
        }

    }

}