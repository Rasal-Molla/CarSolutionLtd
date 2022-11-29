<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    public function List()
    {
        return view('frontend.pages.service');

    }
    
}
