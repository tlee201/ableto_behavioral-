<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\Answer;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    // display the behavioral survey
    public function getBehavioral()
    {
        //$questions = \DB::select('SELECT question_name, id FROM questions');
        //$answers = \DB::select('SELECT fk_question_id, answer_name FROM answers');
        $questions = Question::all();
        $answers = Answer::all();
        return view('layouts.surveys.behavioral', ['questions' => $questions, 'answers' => $answers]);
    }


   public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'survey_ques' => 'required|50',
            'user_answer' => 'required|50'
        ));

        // declare a new instance for the UserAnswer model
        $userAnswers = new UserAnswer;
        // grab the question id from the questions table
        $fk_question_id = DB::table('questions')->where('question_name', $request->get('survey_ques'))->value('question_id');
        $userAnswers->fk_question_id = $fk_question_id;
        // grab the answer id from the answers table
        $fk_answer_id = DB::table('answers')->where('answer_name', $request->get('user_answer'))->value('answer_id');
        $userAnswers->fk_answer_id = $fk_answer_id;
        // grab the user id from the authenticated user
        $userAnswers->fk_user_id = \Auth::user()->id;
        $userAnswers->created_at = \Carbon\Carbon::now();
        $userAnswers->updated = \Carbon\Carbon::now();       
        // save all inserts 
        $userAnswers->save();
        // redirect back to
        return redirect()->route('layouts.surveys.behavioral');
    }


}
