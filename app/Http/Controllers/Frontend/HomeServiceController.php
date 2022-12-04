<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    public function List()
    {
        $serviceList=Service::all();
        return view('frontend.pages.service', compact('serviceList'));

    }
    
}
