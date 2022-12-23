<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Stmt\Return_;

class SCCategoryController extends Controller
{
    public function List()
    {
        $categorylist=Category::with('brand')->where('service_center_id', auth()->user()->id)->get();
        return view('frontend.pages.servicecenter.category.category',compact('categorylist'));
    }

    public function Create()
    {
        $brandlist=Brand::with('brand')->where('service_center_id', auth()->user()->id)->get();
        return view('frontend.pages.servicecenter.category.create',compact('brandlist'));
    }

    public function Store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
            'image'=>'required'

        ]);

        $categoryImage=null;
        if($request->hasFile('image'))
        {
            $categoryImage=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $categoryImage);
        }

        Category::create([

            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$categoryImage,
            'service_center_id'=>auth()->user()->id,
            'brand_id'=>$request->brand_id

        ]);

        notify()->success('Category added successfully');
        return redirect()->route('sccategory.list');

        return redirect()->back()->with('error', 'Invalid info');
    }

    public function Edit($category_id)
    {
        $brandinfo=Brand::with('brand')->where('service_center_id', auth()->user()->id)->get();
        $categoryinfo=Category::find($category_id);
        return view('frontend.pages.servicecenter.category.edit', compact('categoryinfo','brandinfo'));
    }

    public function Update(Request $request ,$category_id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',

        ]);
        $list=Category::find($category_id);
        $categoryImage=$list->image;
        if($request->hasFile('image'))
        {
            $removeFile=public_path().'/uploads/'. $categoryImage;
            File::delete($removeFile);
            $categoryImage=date('Ymdhmi').'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $categoryImage);
        }

        $list->update([

            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$categoryImage,
            'service_center_id'=>auth()->user()->id,
            'brand_id'=>$request->brand_id

        ]);

        notify()->success('Category updated successfully');
        return redirect()->route('sccategory.list');

        return redirect()->back()->with('error', 'Invalid info');
    }
}
