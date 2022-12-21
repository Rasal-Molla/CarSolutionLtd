<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class CustomerPaymentController extends Controller
{
    public function PaymentInfo()
    {
        $paymentdata=Booking::with('serviceCenter','service')->where('user_id', auth()->user()->id)->get();
        return view('frontend.pages.customer.payment.paymentinfo',compact('paymentdata'));
    }
}
