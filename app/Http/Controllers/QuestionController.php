<?php

namespace App\Http\Controllers;

use App\Question;

class QuestionController extends Controller
{
    public function getQuestions()
    {
        return view('questions.questions');
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
}
