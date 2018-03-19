<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Brand;
use App\Question;

class SurveyController extends Controller
{
    public function getSurvey()
    {
        $brands = Brand::all();
        $questions = Question::all();
        return view('survey.survey',compact('brands','questions'));
    }

    public function uploadSurvey(Request $request)
    {

    }
    public function createSurvey(Request $request)
    {
        if($request->ajax())
        {
            return response(Survey::create($request->all()));
        }
    }
    public function showSurveyInformation()
    {
        $surveys= $this->SurveyInformation();
        return view('survey.surveyInfo',compact('surveys'));

    }

    public function SurveyInformation()
    {
        return Survey::all();
    }
    public function editSurvey(Request $request)
    {
        if($request->ajax())
        {
            return response(Survey::find($request->id));
        }
    }
    //=============================================
    public function updateSurvey(Request $request)
    {
        if($request->ajax())
        {
            return response(Survey::updateOrCreate(['id'=>$request->id],$request->all()));
        }
    }
    public function deleteSurvey(Request $request)
    {
        if($request->ajax())
        {
            Survey::destroy($request->id);
        }
    }


}
