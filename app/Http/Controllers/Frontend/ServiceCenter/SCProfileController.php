<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SCProfileController extends Controller
{
    public function Profile()
    {
        // return view('frontend.pages.servicecenter.profile.profile');
        return view("frontend.pages.servicecenter.profile.profile");
    }
}
