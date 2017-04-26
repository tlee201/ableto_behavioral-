<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // define table relation
    // each user has many questions    
    /*public function question()
    {
        return $this->hasMany('App\Question');
    }

    // define table relation
    // each users has many answers    
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }*/

}
