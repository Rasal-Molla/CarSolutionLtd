<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    public function List()
    {
        if(!auth()->user()){
            $serviceList=Service::all();

            return view('frontend.pages.service', compact('serviceList'));

        }
        elseif(auth()->user()->role=='service_center')
        {
            $serviceList=Service::where('service_center_id',auth()->user()->id)->get();
            return view('frontend.pages.service', compact('serviceList'));
        }
        else
        {

            $serviceList=Service::all();

             return view('frontend.pages.service', compact('serviceList'));

        }

    }
}
