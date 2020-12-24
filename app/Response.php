<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['response', 'answer_id',];

    public function answer(){
        return $this->belongsTo('App\Answer');
    }
    public function users(){
        return $this->belongsToMany('App\User', 'response_user', 'response_id', 'user_id');
    }
}
