<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function List(){

        $brand_list=Brand::paginate(5);
        //dd($brand_list);
        return view('backend.pages.brand.brands', compact('brand_list'));
    }

    public function Create(){
        return view('backend.pages.brand.forms');
    }

    public function Form(Request $request){

        $request->validate([

            'brand_name'=>'required|unique:brands',
            'status'=>'required',
            'image'=>'required'
        ]);

        $imageName=null;
        if($request->hasFile('image'))
        {
            $imageName=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $imageName);
        }
        //dd($imageName);

        Brand::create([
            'brand_name'=>$request->brand_name,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$imageName
        ]);
        return redirect()->back()->with('message','Brand added successfully');
    }

    public function Delete($brand_id)
    {
        $brand_delete = Brand::find($brand_id);
        if($brand_delete)
        {
            $brand_delete->delete();
            return redirect()->back()->with('message','Brand deleted successfully');
        }
        else
        {
            return redirect()->back()->with('error','Brand not found');
        }
    }

    public function View($brand_id)
    {
        $brand_view=Brand::find($brand_id);
        return view('backend.pages.brand.view', compact('brand_view'));
    }
}
