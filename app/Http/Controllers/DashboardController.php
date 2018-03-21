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
        $reports= Report::paginate(10);
        $surveys = Survey::paginate(10);
        return view('dashboard',compact('reports','surveys'));
    }

    public function exportReports(){
        $reports = Report::all();
        Excel::create('reports', function($excel) use($reports) {
            $excel->sheet('ExportFile', function($sheet) use($reports) {
                $sheet->fromArray($reports);
            });
        })->export('xls');
        return back();
    }

    public function exportSurvey(){
        $surveys = Survey::all();
        Excel::create('surveys', function($excel) use($surveys) {
            $excel->sheet('ExportFile', function($sheet) use($surveys) {
                $sheet->fromArray($surveys);
            });
        })->export('xls');
        return back();
    }
}
