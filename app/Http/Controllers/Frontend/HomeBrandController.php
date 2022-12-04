<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeBrandController extends Controller
{
    public function List()
    {   
        $brandList=Brand::all();
        return view('frontend.pages.brand', compact('brandList'));
    }
}
