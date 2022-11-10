<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function List(){

        $user_list=User::all();
        //dd($user_list);

        return view('backend.pages.user.users',compact('user_list'));
    }

    public function Create()
    {
        return view('backend.pages.user.creates');
    }

    public function Form(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'phone'=>'required|unique:users,phone',
            'gender'=>'required',
            'image'=>'required'
        ]);

        $fileName=null;
        if($request->hasFile('image'))
        {
            $fileName=date('Ymdhmi'). '.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
    
    User::create
        ([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'image'=>$fileName
        ]);
        return redirect()->back()->with('message','Form submitted successfully');

    }
}
