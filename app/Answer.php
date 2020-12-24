<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'questionnaire_id',
        'answer',
    ];

    public function responses(){
        return $this->hasMany('App\Response');
    }

    public function questionnaire(){
        return $this->belongsTo('App\Questionnaire');
    }
}
