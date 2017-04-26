<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Question::create([
			'survey_id'		=>  1,
			'question_name' => 'What did you eat today for breakfast'
		]);
					
		Question::create([
			'survey_id'		=>  1,
			'question_name' => 'How do you feel today'
		]);
					
		Question::create([
			'survey_id'		=>  1,
			'question_name' => 'What activity did you do today'
		]);
					
		Question::create([
			'survey_id'		=>  1,			
			'question_name' => 'Where did you go today'
		]);
    }
}
