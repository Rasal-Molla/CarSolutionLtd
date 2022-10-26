<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Gateway(){
        return view('backend.pages.payments');
    }
}
