<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SCReportController extends Controller
{

    public function Report()
    {
        $reports=Booking::where('service_center_id',auth()->user()->id)->where('status','Released')->get();
        return view('frontend.pages.servicecenter.report.reportinfo',compact('reports'));
    }


    public function ReportGenerate(Request $request)
    {

    //        $request->validate([
    //            'from_date'    => 'required|date',
    //            'to_date'      => 'required|date|after:from_date',
    //        ]);

            $validator = Validator::make($request->all(), [
                'from_date'    => 'required|date',
                'to_date'      => 'required|date|after:from_date',
            ]);

            if($validator->fails())
            {
    //            notify()->error($validator->getMessageBag());

                notify()->error('From date and to date required and to should greater then from date.');
                return redirect()->back();
            }



           $from=$request->from_date;
           $to=$request->to_date;


    //       $status=$request->status;

            $reports=Booking::whereBetween('created_at', [$from, $to])->where('service_center_id',auth()->user()->id)->where('status','Released')->get();

            return view('frontend.pages.servicecenter.report.reportinfo',compact('reports'));

        }








    //     if($request->from_date && $request->to_date)
    //     {
    //         $startDate= $request->from_date;
    //         $endDate= $request->to_date;
    //         $request->validate([
    //             'from_date'=>'before_or_equal:now',
    //             'to_date'=>'after_or_equal:now'
    //         ]);
    //         $reportdata=Booking::whereBetween('created_at', [$startDate,$endDate])->where('service_center_id',auth()->user()->id)->where('status','Released')->get();
    //         return view('frontend.pages.servicecenter.report.reportinfo', compact('reportdata'));

    //     }
    //     else
    //     {
    //         $reportdata=Booking::where('service_center_id',auth()->user()->id)->where('status','Released')->get();
    //         return view('frontend.pages.servicecenter.report.reportinfo', compact('reportdata'));
    //     }

}
