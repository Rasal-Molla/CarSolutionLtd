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

    
    User::create
        ([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'gender'=>$request->gender
        ]);
        return redirect()->back();

    }
}
