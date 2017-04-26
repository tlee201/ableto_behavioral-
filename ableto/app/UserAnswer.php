<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    // mass assign attributes for the user_answers table
    protected $fillable = array('user_id', 'answer_id', 'created_at', 'updated_at'); 
}
