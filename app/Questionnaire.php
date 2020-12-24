<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    //
    protected $fillable = ['question'];

    public function questionnaireUser(){
        return $this->hasOne('App\QuestionnaireUser');
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }
}
