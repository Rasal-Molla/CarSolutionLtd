<?php

namespace App\Http\Controllers\Frontend\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
   public function Profile()
   {
      return view('frontend.pages.customer.profile.profile');
   }

   public function Update(Request $request)
   {
      $request->validate([
         'name'=>'required',
         'email'=>'required|email',
         'phone'=>'required|regex:/(01)[0-9]{9}/',
         'address'=>'required'
      ]);

      $user=User::find(auth()->user()->id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,

        ]);

      notify()->success('Profile update successfully!');
      return redirect()->back();

      return redirect()->back()->with('error','Provide details');
   }
}
