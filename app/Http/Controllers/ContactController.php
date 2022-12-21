<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Message()
    {
        $contact=Contact::paginate(10);
        return view('backend.pages.contact', compact('contact'));
    }

    public function Contact()
    {
        return view('frontend.pages.contact');
    }

    public function Store(Request $request)
    {
        //dd($request->all());
        $request->validate([

            'name'=>'required',
            'phone'=>'required|regex:/(01)[0-9]{9}/',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        Contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'message'=>$request->message
        ]);

        notify()->success('Message send done!');
        return redirect()->route('Home');

        return redirect()->back()->with('error','Please provide proper info');
    }

    public function Delete($contact_id)
    {
        $delete=Contact::find($contact_id);
        if($delete)
        {
            $delete->delete();
            notify()->success('Message delete done!');
            return redirect()->back();
        }
        return redirect()->route('dashboard');
    }
}
