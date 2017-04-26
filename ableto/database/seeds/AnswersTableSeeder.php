<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Answer::create( [
		'question_id'=>1,
		'answer_name'=>'Eggs'  
		] );
					
		Answer::create( [
		'question_id'=>1,
		'answer_name'=>'Cereal'  
		] );
					
		Answer::create( [
		'question_id'=>1,
		'answer_name'=>'Toast'  
		] );
					
		Answer::create( [
		'question_id'=>1,
		'answer_name'=>'Pancakes'  
		] );
					
		Answer::create( [
		'question_id'=>3,
		'answer_name'=>'Biking'  
		] );
					
		Answer::create( [
		'question_id'=>3,
		'answer_name'=>'Basketball'  
		] );
					
		Answer::create( [
		'question_id'=>3,
		'answer_name'=>'Jogging'  
		] );
					
		Answer::create( [
		'question_id'=>3,
		'answer_name'=>'Walking'  
		] );
					
		Answer::create( [
		'question_id'=>4,
		'answer_name'=>'Work'  
		] );
					
		Answer::create( [
		'question_id'=>4,
		'answer_name'=>'Park'  
		] );
					
		Answer::create( [
		'question_id'=>4,
		'answer_name'=>'Beach'  
		] );
					
		Answer::create( [
		'question_id'=>4,
		'answer_name'=>'Movies'  
		] );
					
		Answer::create( [
		'question_id'=>4,
		'answer_name'=>'School'  
		] );
					
		Answer::create( [
		'question_id'=>2,
		'answer_name'=>'Excellent'  
		] );
					
		Answer::create( [
		'question_id'=>2,
		'answer_name'=>'Very Good'  
		] );
					
		Answer::create( [
		'question_id'=>2,
		'answer_name'=>'Good'  
		] );
					
		Answer::create( [
		'question_id'=>2,
		'answer_name'=>'OK'  
		] );
					
		Answer::create( [
		'question_id'=>2,
		'answer_name'=>'Bad'  
		]);
	}
}
