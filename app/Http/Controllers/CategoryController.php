<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function List(){
        return view('backend.pages.category.categories');
    }

    public function CreateCategory()
    {
        return view('backend.pages.category.createcategories');
    }

    public function Form(Request $request)
    {
        //dd($request->all());
        Category::create([
            'Name'=>$request->name,
            'Model'=>$request->model,
            'Tires_Type'=>$request->tires_type,
            'Engines_Type'=>$request->engines_type

        ]);

        return redirect()->back();
    }
}
