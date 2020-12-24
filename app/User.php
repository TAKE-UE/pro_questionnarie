<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function responses(){
        return $this->belongsToMany('App\Response', 'response_user', 'user_id', 'response_id');
    }
    public function questionnaireUsers(){
        return $this->hasMany('App\QuestionnaireUser');
    }
    public function questionnaires(){
        return $this->hasManyThrough('App\Questionnaire', 'App\QuestionnaireUser', 'user_id', 'id', 'id', 'questionnaire_id' );
    }
    public function answers(){
        return $this->hasManyThrough('App\Answer', 'App\Response', 'answer_id', 'id', 'id', 'answer_id');
    }
    
}
