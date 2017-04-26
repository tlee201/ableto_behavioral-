<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    // mass assign attributes for the survey table
    protected $fillable = array('survey_name', 'created_at', 'updated_at'); 
}
