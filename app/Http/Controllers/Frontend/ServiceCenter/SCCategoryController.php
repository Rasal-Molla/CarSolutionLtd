<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SCCategoryController extends Controller
{
    public function List()
    {
        $categoryList=Category::paginate(5);
        return view('frontend.pages.servicecenter.category.category', compact('categoryList'));
    }
}
