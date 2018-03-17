<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function getSurvey()
    {
        return view('survey.survey');
    }
}
