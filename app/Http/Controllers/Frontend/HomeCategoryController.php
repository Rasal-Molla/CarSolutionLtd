<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public function Category()
    {
        $categoryList=Category::all();
        return view('frontend.pages.category', compact('categoryList'));
    }
}
