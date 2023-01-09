<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function listBrand()
    {
        $brands=Brand::select('brand_name','status')->get();
        return $this->responseWithSuccess($brands,'Brand List shown');
    }

    public function storeBrand(Request $request)
    {
        $validation=Validator::make($request->all(), [
            'brand_name'=>'required',
            'status'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);

        if($validation->fails())
        {
            return $this->responseWithError($validation->getMessageBag());
        }

        $fileName = null;
        if ($request->hasFile('image'))
        {
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }

        $brands=Brand::create([
            'service_center_id'=>$request->service_center_id,
            'brand_name'=>$request->brand_name,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$fileName
        ]);

        return $this->responseWithSuccess($brands,'Brand created successfully!');
    }

    public function viewBrand($id)
    {
        $brand=Brand::find($id);
        if($brand)
        {
            return $this->responseWithSuccess($brand,'Brand viewed!');
        }
        return $this->responseWithError('No brand viewed!');
    }

    public function updateBrand(Request $request, $id)
    {
        $validation=Validator::make($request->all(), [
            'brand_name'=>'required',
            'status'=>'required',
            'description'=>'required'
        ]);

        if($validation->fails())
        {
            return $this->responseWithError($validation->getMessageBag());
        }

        $brand=Brand::find($id);
        $fileName =$brand->image;
        if ($request->hasFile('image'))
        {
            $removeFile=public_path().'/uploads/'.$fileName;
            File::delete($removeFile);
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }

        if($brand)
        {
            $brand->update([
                'brand_name'=>$request->brand_name,
                'status'=>$request->status,
                'description'=>$request->description
            ]);
            return $this->responseWithSuccess($brand,'Brand update successfully!');
        }
        return $this->responseWithError('Brand not updated');
    }
}
