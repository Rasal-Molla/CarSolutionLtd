<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SCCategoryController extends Controller
{
    public function List()
    {
        return view('frontend.pages.servicecenter.category.category');
    }

    public function Form()
    {
        return view('frontend.pages.servicecenter.category.create');
    }
}
