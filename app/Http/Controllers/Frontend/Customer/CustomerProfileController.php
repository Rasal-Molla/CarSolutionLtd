<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
   public function Profile()
   {
      return view('frontend.pages.customer.profile.profile');
   }
}
