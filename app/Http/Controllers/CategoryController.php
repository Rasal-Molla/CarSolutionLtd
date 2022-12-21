<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

        notify()->success('New category added');
        return redirect()->back();

        return redirect()->back()->with('message','Wrong information');
    }

    public function Delete($category_id){

        $data=Category::find($category_id);
        if($data)
        {
            $data->delete();
            notify()->success('Category Deleted');
            return redirect()->back();;
        }
        else
        {
            notify()->error('Category not found');
            return redirect()->back();
        }

        //   Product::findOrFail($product_id)->delete();
        //   return redirect()->back()->with('message','product deleted successfully.');

    }

    public function View($category_id){

        $viewData=Category::find($category_id);

        return view('backend.pages.category.view', compact('viewData'));

    }

    public function Edit($category_id)
    {
        $category_data=Category::find($category_id);
        return view('backend.pages.category.edit',compact('category_data'));
    }

    public function Update(Request $request, $category_id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
        ]);

        $catUpdate=Category::find($category_id);
        $catImage=$catUpdate->image;
        if($request->hasFile('image'))
        {
            $removeFile=public_path().'/uploads/'.$catImage;
            File::delete($removeFile);
            $catImage=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $catImage);
        }
        //dd($request->all());
        $catUpdate->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=>$catImage

        ]);

        notify()->success('Category Updated');
        return redirect()->route('category');

        return redirect()->back()->with('error', 'Provide category info');
    }

}
