<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Gateway(){
        $paymentinfo=Booking::with('serviceCenter','service')->where('status','Released')->get();
        return view('backend.pages.payments',compact('paymentinfo'));
    }
}
