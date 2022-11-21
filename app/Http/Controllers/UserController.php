<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function Delete($id)
    {
        $customer=User::find($id);
        if($customer)
        {
            $customer->delete();
            return redirect()->back()->with('message','Customer deleted successfully');
        }
        else
        {
            return redirect()->back()->with('error','Customer not found');
        }

    }

    public function Login(){

        return view('backend.pages.login');
    }

    public function Dologin(Request $request){

        $credintials=$request->except('_token');
        //dd($credintials);
        if(Auth::attempt($credintials))
        {   //dd('login hoice');
            return redirect()->route('dashboard')->with('message', 'Login successfully');
        }
        //dd('login hoynai');
        return redirect()->back()->with('message', 'Invalid credintials');
    }

    public function Logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function Userlogin()
    {
        return view('frontend.pages.login');
    }
}
