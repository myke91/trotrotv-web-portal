<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Survey;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $reports= Report::all();
        $surveys = Survey::all();
        return view('dashboard',compact('reports','surveys'));
    }

    public function exportReports(){
        $reports = Report::whereRaw('Date(timestamp) = CURDATE()')->get();
        Excel::create('reports', function($excel) use($reports) {
            $excel->sheet('ExportFile', function($sheet) use($reports) {
                $sheet->fromArray($reports);
            });
        })->export('xls');
        return back();
    }

    public function exportSurvey(){
        $surveys = Survey::whereRaw('Date(timestamp) = CURDATE()')->get();
        Excel::create('surveys', function($excel) use($surveys) {
            $excel->sheet('ExportFile', function($sheet) use($surveys) {
                $sheet->fromArray($surveys);
            });
        })->export('xls');
        return back();
    }
}
