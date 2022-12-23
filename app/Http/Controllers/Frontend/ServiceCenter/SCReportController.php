<?php

namespace App\Http\Controllers\Frontend\ServiceCenter;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SCReportController extends Controller
{

    public function ReportGenerate(Request $request)
    {

        if($request->from_date && $request->to_date)
        {
            $startDate= $request->from_date;
            $endDate= $request->to_date;
            $request->validate([
                'from_date'=>'before_or_equal:now',
                'to_date'=>'after_or_equal:now'
            ]);
            $reportdata=Booking::whereBetween('created_at', [$startDate,$endDate])->where('service_center_id',auth()->user()->id)->where('status','Released')->get();
            return view('frontend.pages.servicecenter.report.reportinfo', compact('reportdata'));
            
        }
        else
        {
            $reportdata=Booking::where('service_center_id',auth()->user()->id)->where('status','Released')->get();
            return view('frontend.pages.servicecenter.report.reportinfo', compact('reportdata'));
        }
    }
}
