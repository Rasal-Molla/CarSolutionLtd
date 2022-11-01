<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function List(){
        return view('backend.pages.user.users');
    }

    public function Create()
    {
        return view('backend.pages.user.creates');
    }

    public function Form(Request $request)
    {

      
       User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->pswd,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'birth_date'=>$request->birth_date,
            'gender'=>$request->gender
       ]);

       return redirect()->back();

    }
}
