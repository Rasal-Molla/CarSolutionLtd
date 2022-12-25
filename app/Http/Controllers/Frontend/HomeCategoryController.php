<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public function Category()
    {
        if(!auth()->user()){
            $categoryList=Category::where('status', 'active')->get();

            return view('frontend.pages.category.category', compact('categoryList'));

        }
        elseif(auth()->user()->role=='service_center')
        {
            $categoryList=Category::where('service_center_id',auth()->user()->id)->get();
            return view('frontend.pages.category.category', compact('categoryList'));
        }
        else
        {

            $categoryList=Category::where('status','active')->get();

             return view('frontend.pages.category.category', compact('categoryList'));

        }
    }

    public function Details($category_id)
    {
        $categoryInfo=Category::with('user','brand')->find($category_id);
        return view('frontend.pages.category.details', compact('categoryInfo'));
    }
}
