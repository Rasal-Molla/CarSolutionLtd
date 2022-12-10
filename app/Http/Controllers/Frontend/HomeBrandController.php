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
        return view('frontend.pages.brand.brand', compact('brandList'));
    }

    public function Details($brand_id)
    {
        $brandInfo=Brand::find($brand_id);
        return view('frontend.pages.brand.details', compact('brandInfo'));
    }
}
