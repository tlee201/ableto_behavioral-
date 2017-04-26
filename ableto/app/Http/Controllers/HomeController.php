<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class HomeController extends Controller
{


    // display surveys
    public function getSurvey()
    {
        $surveys = Survey::all();
        return view('home', ['surveys' => $surveys]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

}
