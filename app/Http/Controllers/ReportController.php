<?php

namespace App\Http\Controllers;

use App\Question;
use App\Report;
use App\Vehicle;
use Illuminate\Http\Request;
use \Log;
use App\Logger;

class ReportController extends Controller
{
    public function getReports()
    {
        $vehicles = Vehicle::all();
        $questions = Question::all();
        $users = Logger::all();
        return view('reports.reports', compact('vehicles', 'questions','users'));
    }
    public function createReport(Request $request)
    {
        if ($request->ajax()) {
            return response(Report::create($request->all()));
        }
    }
    public function showReportInformation()
    {
        $reports = $this->ReportInformation();
        return view('reports.reportInfo', compact('reports'));

    }

    public function ReportInformation()
    {
        return Report::paginate(10);
    }

    public function editReport(Request $request)
    {
        if ($request->ajax()) {
            return response(Report::find($request->id));
        }
    }
    //=============================================
    public function updateReport(Request $request)
    {
        if ($request->ajax()) {
            return response(Report::updateOrCreate(['id' => $request->id], $request->all()));
        }
    }
    public function deleteReport(Request $request)
    {
        if ($request->ajax()) {
            Report::destroy($request->id);
        }
    }

    public function uploadReports(Request $request)
    {
        Log::debug('Uploading reports...');
        $i = 0;
        $data = array();
        while (true) {
            if (!$request[$i]) {
                break;
            }

            $item = $request[$i];

            $report = new Report();
            $report->vehicle = (string) $item['vehicle'];
            $report->question = (string) $item['question'];
            $report->answer = (string) $item['answer'];
            $report->comments = (string) $item['comments'];
            $report->uploaded = "true";
            $report->timestamp = (string) $item['timestamp'];
            $report->user = (string) $item['timestamp'];

            $report->save();

            $fields = array();
            $fields['id'] = $item['id'];
            $fields['vehicle'] = $report->vehicle;
            $fields['question'] = $report->question;
            $fields['answer'] = $report->answer;
            $fields['uploaded'] = $report->uploaded;
            $fields['comments'] = $report->comments;
            $fields['timestamp'] = $report->timestamp;
            $fields['user'] = $report->user;

            
            array_push($data, $fields);

            $i++;
        }
        Log::debug($data);
        return response()->json($data);
    }
}
