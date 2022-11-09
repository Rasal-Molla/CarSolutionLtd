<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function List(){

        $list=Category::paginate(5);

        return view('backend.pages.category.categories', compact('list'));
    }

    public function CreateCategory()
    {
        return view('backend.pages.category.createcategories');
    }

    public function Form(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);

        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status

        ]);

        return redirect()->back()->with('message','Form submitted successfully');
    }
}
