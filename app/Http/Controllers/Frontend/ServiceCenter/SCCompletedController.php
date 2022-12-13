<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class SCCompletedController extends Controller
{
    public function List()
    {
        $completeWorkList=Booking::with('ServiceCenter','service')->where('service_center_id', auth()->user()->id)->where('status', 'Released')->get();
        return view('frontend.pages.servicecenter.completed.completed', compact('completeWorkList'));
    }
}
