<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function List(){
        return view('backend.pages.services');
    }
}
