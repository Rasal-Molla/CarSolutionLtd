<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report(){
        $reports=Booking::where('status','Released')->get();
        return view('backend.pages.report',compact('reports'));
    }

    public function reportGenerate(Request $request)
    {


            $validator = Validator::make($request->all(), [
                'from_date'    => 'required|date',
                'to_date'      => 'required|date|after:from_date',
            ]);

            if($validator->fails())
            {

                notify()->error('From date and to date required and to should greater then from date.');
                return redirect()->back();
            }



           $from=$request->from_date;
           $to=$request->to_date;

            $reports=Booking::with('serviceCenter')->whereBetween('created_at', [$from, $to])->where('status','Released')->get();

            return view('backend.pages.report',compact('reports'));

        }

}
