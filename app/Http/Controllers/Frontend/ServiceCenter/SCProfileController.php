<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SCProfileController extends Controller
{
    public function Profile()
    {
        return view("frontend.pages.servicecenter.profile.profile");
    }

    public function Edit(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required'

        ]);

        $user=User::find(auth()->user()->id);
        $user->update([
            'name'=>$request->service_center,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address
        ]);

        notify()->success('Profile Updated!');
        return redirect()->back();
    }

}
