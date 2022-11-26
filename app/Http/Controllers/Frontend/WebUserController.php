<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'role'=>'customer'
        ]);
        
        return redirect()->route('Home');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credientials=$request->except('_token');
        if(Auth::attempt($credientials)){

            if(auth()->user()->role=='customer'){
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

}
