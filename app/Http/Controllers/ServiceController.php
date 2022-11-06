<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function List(){

        $service_list=Service::all();
        return view('backend.pages.service.services', compact('service_list'));
    }

    public function Create(){
        return view('backend.pages.service.makes');
    }

    public function Form(Request $request){
        
        Service::create([

            'service_name'=>$request->service_name
        ]);
        return redirect()->back();
    }
    
}
