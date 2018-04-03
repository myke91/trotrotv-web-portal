<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Answer;


class AnswerController extends Controller
{
    public function getAnswers()
    {
        $questions = Question::all();
        return view('answers.answer',compact('questions'));
    }
    public function createAnswer(Request $request)
    {
        if ($request->ajax()) {
            return response(Answer::create($request->all()));
        }
    }
    public function showAnswerInformation()
    {
        $answers = $this->AnswerInformation();
        return view('answers.answerInfo', compact('answers'));

    }

    public function AnswerInformation()
    {
        return Answer::join('questions','questions.id','=','answers.question_id')->get();
    }
    public function editAnswer(Request $request)
    {
        if ($request->ajax()) {
            return response(Answer::find($request->id));
        }
    }
    //=============================================
    public function updateAnswer(Request $request)
    {
        if ($request->ajax()) {
            return response(Answer::updateOrCreate(['id' => $request->id], $request->all()));
        }
    }
    public function deleteAnswer(Request $request)
    {
        if ($request->ajax()) {
            Answer::destroy($request->id);
        }
    }
}
