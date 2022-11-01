<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function List(){
        return view('backend.pages.category.categories');
    }

    public function CreateCategory(){
        return view('backend.pages.category.create');
    }

    public function CategoryForm(Request $request)
    {
        //dd($request->all());
        Category::create([
            'name'=>$request->name,
            'model'=>$request->model,
            'wheel_type'=>$request->wheel_type,
            'engines_type'=>$request->engines_type

        ]);
        return redirect()->back();



    }
}
