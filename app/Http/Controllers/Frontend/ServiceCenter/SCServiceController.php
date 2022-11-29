<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SCServiceController extends Controller
{
    public function List()
    {
        return view('frontend.pages.servicecenter..service.service');
    }

    public function Form()
    {
        return view('frontend.pages.servicecenter.service.create');
    }

}
