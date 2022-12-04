<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service_center;
use Illuminate\Http\Request;

class HomeServiceCenterController extends Controller
{
    public function List()
    {
        $serviceCenter=Service_center::all();
        return view('frontend.pages.serviceCenter', compact('serviceCenter'));
    }
}
