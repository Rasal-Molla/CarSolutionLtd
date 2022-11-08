<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car_model;

class CarModelController extends Controller
{
    public function List(){

        $model_list=Car_model::paginate(1);

        return view('backend.pages.carmodel.list', compact('model_list'));
    }

    public function Create(){
        return view('backend.pages.carmodel.forms');
    }

    public function Form(Request $request){

        $request->validate([

            'model_name'=>'required|unique:car_models'

        ]);

        Car_model::create([

            'model_name'=>$request->model_name,
            'description'=>$request->description,
            'status'=>$request->status

        ]);

        return redirect()->back();

    }
}
