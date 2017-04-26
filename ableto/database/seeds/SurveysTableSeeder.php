<?php

use Illuminate\Database\Seeder;
use App\Survey;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Survey::create([
			'survey_name' => 'Behavioral'  
		]);
    }
}
