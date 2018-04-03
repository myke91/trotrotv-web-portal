<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Question;
use App\Survey;
use Illuminate\Http\Request;
use \Log;
use App\Logger;

class SurveyController extends Controller
{
    public function getSurvey()
    {
        $brands = Brand::all();
        $questions = Question::all();
        $users = Logger::all();
        return view('survey.survey', compact('brands', 'questions','users'));
    }

    public function createSurvey(Request $request)
    {
        if ($request->ajax()) {
            return response(Survey::create($request->all()));
        }
    }
    public function showSurveyInformation()
    {
        $surveys = $this->SurveyInformation();
        return view('survey.surveyInfo', compact('surveys'));

    }

    public function SurveyInformation()
    {
        return Survey::paginate(10);
    }
    public function editSurvey(Request $request)
    {
        if ($request->ajax()) {
            return response(Survey::find($request->id));
        }
    }
    //=============================================
    public function updateSurvey(Request $request)
    {
        if ($request->ajax()) {
            return response(Survey::updateOrCreate(['id' => $request->id], $request->all()));
        }
    }
    public function deleteSurvey(Request $request)
    {
        if ($request->ajax()) {
            Survey::destroy($request->id);
        }
    }

    public function uploadSurvey(Request $request)
    {
        Log::debug('Uploading survey...');
        $i = 0;
        $data = array();
        while (true) {
            if (!$request[$i]) {
                break;
            }

            $item = $request[$i];

            $survey = new Survey();
            $survey->brand = (string) $item['brand'];
            $survey->question = (string) $item['question'];
            $survey->answer = (string) $item['answer'];
            $survey->uploaded = "true";
            $survey->timestamp = (string) $item['timestamp'];

            $survey->save();

            $fields = array();
            $fields['id'] = $item['id'];
            $fields['brand'] = $survey->brand;
            $fields['question'] = $survey->question;
            $fields['answer'] = $survey->answer;
            $fields['uploaded'] = $survey->uploaded;
            $fields['timestamp'] = $survey->timestamp;

            array_push($data, $fields);

            $i++;
        }
        Log::debug($data);
        return response()->json($data);
    }

}
