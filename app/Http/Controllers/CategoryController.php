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
            'status'=>'required',
            'image'=>'required'
        ]);

        $catImage=null;
        if($request->hasFile('image'))
        {
            $catImage=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $catImage);
        }
        //dd($request->all());
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$catImage

        ]);

        return redirect()->back()->with('message','New category added');
    }

    public function Delete($category_id){

        $data=Category::find($category_id);
        if($data)
        {
            $data->delete();
            return redirect()->back()->with('message','Category delete successfully.');
        }
        else
        {
            return redirect()->back()->with('error','Category not found.');
        }

        //   Product::findOrFail($product_id)->delete();
        //   return redirect()->back()->with('message','product deleted successfully.');

    }

    public function View($category_id){

        $viewData=Category::find($category_id);

        return view('backend.pages.category.view', compact('viewData'));

    }
}
