<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceCenterController extends Controller
{
    public function List(){
        return view('backend.pages.servicescenter');
    }
}
