<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeBrandController extends Controller
{
    public function List()
    {

        if(!auth()->user()){
            $brandList=Brand::where('status', 'active')->get();

            return view('frontend.pages.brand.brand', compact('brandList'));

        }
        elseif(auth()->user()->role=='service_center')
        {
            $brandList=Brand::where('service_center_id',auth()->user()->id)->get();
            return view('frontend.pages.brand.brand', compact('brandList'));
        }
        else
        {

            $brandList=Brand::where('status','active')->get();

             return view('frontend.pages.brand.brand', compact('brandList'));

        }

    }

    public function Details($brand_id)
    {
        $brandInfo=Brand::find($brand_id);
        return view('frontend.pages.brand.details', compact('brandInfo'));
    }
}
