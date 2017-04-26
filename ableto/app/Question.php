<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // mass assign attributes for the question table
    protected $fillable = array('survey_id', 'question_name', 'created_at', 'updated_at'); 

    
}
