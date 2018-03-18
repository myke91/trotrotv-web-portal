<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;
use App\Vehicle;
use App\Question;

use \Log;


class ReportController extends Controller
{
    public function getReports()
    {
        $vehicles = Vehicle::all();
        $questions = Question::all();
        return view('reports.reports',compact('vehicles','questions'));
    }
    public function createReport(Request $request)
    {
        if($request->ajax())
        {
            return response(Report::create($request->all()));
        }
    }
    public function showReportInformation()
    {
        $reports= $this->ReportInformation();
        return view('reports.reportInfo',compact('reports'));

    }

    public function ReportInformation()
    {
        return Report::join('vehicles','vehicles.vehicle_id','=','report.vehicle_id')
            ->join('questions','questions.question_id','=','report.question_id')
            ->get();
    }
    public function editReport(Request $request)
    {
        if($request->ajax())
        {
            return response(Report::find($request->report_id));
        }
    }
    //=============================================
    public function updateReport(Request $request)
    {
        if($request->ajax())
        {
            return response(Report::updateOrCreate(['report_id'=>$request->report_id],$request->all()));
        }
    }
    public function deleteReport(Request $request)
    {
        if($request->ajax())
        {
            Report::destroy($request->report_id);
        }
    }

    public function uploadReports(Request $request)
    {
            Log::debug('Uploading reports...');
            Log::debug($request);
    }
}
