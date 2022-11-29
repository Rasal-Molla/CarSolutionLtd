<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerBookingController extends Controller
{
    public function BookingInfo()
    {
        return view('frontend.pages.customer.booking.booking');
    }
}
