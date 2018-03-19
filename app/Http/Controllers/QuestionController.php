<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionController extends Controller
{
    public function getQuestions()
    {
        return view('questions.questions');
    }

    public function createQuestion(Request $request)
    {
        if($request->ajax())
        {
            return response(Question::create($request->all()));
        }
    }
    public function showQuestionInformation()
    {
        $questions = $this->QuestionInformation();
        return view('questions.questionInfo', compact('questions'));
    }


    public function downloadQuestions()
    {

        $questions = $this->QuestionInformation();
        return response()->json($questions);

    }

    public function QuestionInformation()
    {
        return Question::all();
    }

    public function editQuestion(Request $request)
    {
        if($request->ajax())
        {
            return response(Question::find($request->id));
        }
    }
    //=============================================
    public function updateQuestion(Request $request)
    {
        if($request->ajax())
        {
            return response(Question::updateOrCreate(['id'=>$request->id],$request->all()));
        }
    }
    public function deleteQuestion(Request $request)
    {
        if($request->ajax())
        {
            Question::destroy($request->id);
        }
    }


}
