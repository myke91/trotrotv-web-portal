<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Log;

class ReportController extends Controller
{
    public function getReports()
    {
        return view('reports.reports');
    }

    public function uploadReports(Request $request)
    {
            Log::debug('Uploading reports...');
            Log::debug($request);
    }
}
