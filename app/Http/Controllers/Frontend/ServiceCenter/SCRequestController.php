<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Brand;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class SCRequestController extends Controller
{
    public function List()
    {
        $bookingInfo=Booking::where('service_center_id',auth()->user()->id)->get();
        return view('frontend.pages.servicecenter.request.request', compact('bookingInfo'));
    }

    public function Edit($request_id)
    {

        $service=Service::all();
        $brand=Brand::all();
        $requestInfo=Booking::find($request_id);
        $service_center = User::where('role','service_center')->get();
        return view('frontend.pages.servicecenter.request.edit', compact('requestInfo','service','brand','service_center'));
    }

    public function Update(Request $request, $request_id)
    {
        $requestUpdate=Booking::find($request_id);
        $requestUpdate->update([

            'price'=>$request->price,
            'status'=>$request->status
        ]);

        notify()->success('Responsed!');
        return redirect()->route('screquest.list');
    }

    public function Delete($request_id)
    {
        $deleteRequest=Booking::find($request_id);
        if($deleteRequest)
        {
            $deleteRequest->delete();
            notify()->success('Delete successfully');
            return redirect()->back();
        }
            notify()->error('Service Request Not Found');
            return redirect()->route('Home');
    }
}
