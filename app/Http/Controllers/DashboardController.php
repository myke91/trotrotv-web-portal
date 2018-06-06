<?php

namespace App\Http\Controllers;

use App\Report;
use App\Survey;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $reports = Report::paginate(10);
        $surveys = Survey::paginate(10);
        return view('dashboard', compact('reports', 'surveys'));
    }

    public function exportReports(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        $from = date("Y-m-d", strtotime($from));
        $to = date("Y-m-d", strtotime($to));
        $reports = Report::whereBetween('created_at', [$from, $to])->get();

        Excel::create('reports ' . date('Y-m-d h:i:sa'), function ($excel) use ($reports) {
            $excel->sheet('ExportFile', function ($sheet) use ($reports) {
                $sheet->fromArray($reports);
            });
        })->export('xls');
        return back();
    }

    public function exportSurvey(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        $from = date("Y-m-d", strtotime($from));
        $to = date("Y-m-d", strtotime($to));

        $surveys = Survey::whereBetween('created_at', [$from, $to])->get();
        Excel::create('surveys ' . date('Y-m-d h:i:sa'), function ($excel) use ($surveys) {
            $excel->sheet('ExportFile', function ($sheet) use ($surveys) {
                $sheet->fromArray($surveys);
            });
        })->export('xls');
        return back();
    }
}
