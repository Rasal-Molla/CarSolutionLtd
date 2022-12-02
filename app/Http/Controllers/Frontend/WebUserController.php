<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service_center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebUserController extends Controller
{
    public function SignUp(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required'

        ]);

        $customerImage=null;
        if($request->hasFile('image'))
        {
            $customerImage=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $customerImage);
        }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$customerImage,
            'password'=>bcrypt($request->password),
            'role'=>'customer'
        ]);
        
        notify()->success('SignUp done!');
        return redirect()->route('Home');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credientials=$request->except('_token');

        if(Auth::attempt($credientials))
        {
            // First in_array procedure
            //$data=auth()->user()->role;
            //$array=['customer','service_center'];
            //if(in_array($data,$array))

            // Second in_array procedure
            //$data=auth()->user()->role;
            //if(in_array($data,['customer','service_center']))

            if(in_array(auth()->user()->role,['customer','service_center']))
            {
                notify()->success('Login success!');
                return redirect()->back();
            }
            else
            {
                Auth::logout();
                notify()->error('You are not a customer!');
                return redirect()->route('login');
            }
           
        }
        return redirect()->back();

    }

    public function Logout()
    {
        Auth::logout();
        notify()->success('Logout success!');
        return redirect()->route('Home');
    }

    public function Service_signup(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required'

        ]);

        $serviceCenterImage=null;
        if($request->hasFile('image'))
        {
            $serviceCenterImage=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $serviceCenterImage);
        }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$serviceCenterImage,
            'password'=>bcrypt($request->password),
            'role'=>'service_center'
        ]);
        
        Service_center::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$serviceCenterImage
        ]);
        notify()->success('SignUp done!');
        return redirect()->route('Home');

    }



}
