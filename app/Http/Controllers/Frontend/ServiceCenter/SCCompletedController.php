<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SCCompletedController extends Controller
{
    public function List()
    {
        return view('frontend.pages.servicecenter.completed.completed');
    }
}
