<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function List(){

        $brand_list=Brand::paginate(1);
        //dd($brand_list);
        return view('backend.pages.brand.brands', compact('brand_list'));
    }

    public function Create(){
        return view('backend.pages.brand.forms');
    }

    public function Form(Request $request){

        $request->validate([

            'brand_name'=>'required|unique:brands'

        ]);

        Brand::create([
            'brand_name'=>$request->brand_name,
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        return redirect()->back();
    }
}
