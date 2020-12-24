<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireUser extends Model
{
    protected $table = 'questionnaire_user';
    protected $fillable = ['questionnaire_id', 'user_id',];

    public function questionnaire(){
        return $this->belongsTo('App\Questionnaire');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

}
