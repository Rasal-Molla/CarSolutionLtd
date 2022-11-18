<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeBookingController extends Controller
{
    public function Book()
    {
        return view('frontend.pages.book');
    }
}
