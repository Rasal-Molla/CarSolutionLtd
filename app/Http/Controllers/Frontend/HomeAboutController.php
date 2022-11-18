<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
    public function About()
    {
        return view('frontend.pages.about');
    }
}
