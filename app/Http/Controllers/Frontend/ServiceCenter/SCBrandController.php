<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SCBrandController extends Controller
{
    public function List()
    {
        $brandList=Brand::where('service_center_id', auth()->user()->id)->get();

        return view('frontend.pages.servicecenter.brand.list',compact('brandList'));
    }

    public function Create()
    {
        return view('frontend.pages.servicecenter.brand.create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'brand_name'=>'required',
            'status'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);

        $brandImage=null;
        if($request->hasFile('image'))
        {
            $brandImage= date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $brandImage);
        }

        Brand::create([

            'brand_name'=>$request->brand_name,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$brandImage,
            'service_center_id'=>auth()->user()->id
        ]);

        notify()->success('Brand Created successfully');
        return redirect()->route('scbrand.list');


        return redirect()->back()->with('error', 'Wrong brand info');

    }

    public function Edit(Request $request, $brand_id)
    {
        $brandData=Brand::find($brand_id);
        return view('frontend.pages.servicecenter.brand.edit', compact('brandData'));
    }

    public function Update(Request $request, $brand_id)
    {
        $request->validate([
            'brand_name'=>'required',
            'status'=>'required',
            'description'=>'required'
        ]);

        $list=Brand::find($brand_id);
        $brandImage=$list->image;
        if($request->hasFile('image'))
        {
            $removeFile=public_path().'/uploads/'. $brandImage;
            File::delete($removeFile);
            $brandImage= date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $brandImage);
        }

        $list->Update([

            'brand_name'=>$request->brand_name,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$brandImage
        ]);

        notify()->success('Brand updated successfully');
        return redirect()->route('scbrand.list');


        return redirect()->back()->with('error', 'Wrong brand info');
    }
}
