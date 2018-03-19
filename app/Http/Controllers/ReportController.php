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
        return Report::all();
    }
    public function editReport(Request $request)
    {
        if($request->ajax())
        {
            return response(Report::find($request->id));
        }
    }
    //=============================================
    public function updateReport(Request $request)
    {
        if($request->ajax())
        {
            return response(Report::updateOrCreate(['id'=>$request->id],$request->all()));
        }
    }
    public function deleteReport(Request $request)
    {
        if($request->ajax())
        {
            Report::destroy($request->id);
        }
    }

    public function uploadReports(Request $request)
    {
            Log::debug('Uploading reports...');
            Log::debug($request);
    }
}
