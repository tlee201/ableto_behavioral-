<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    
    // mass assign attributes for the answer table
    protected $fillable = array('question_id', 'answer_name', 'created_at', 'updated_at'); 




}
