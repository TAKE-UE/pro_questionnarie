<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Questionnaire;
use App\Answer;
use App\Response;
use App\User;


class ResponseController extends Controller
{
    public function poll($id){
        $details = Questionnaire::find($id);
        return view('response.poll')->with(['details' => $details]);
    }

    public function responsePoll(Request $request){
        if(Auth::check()){
            $setcookie = 'setresponcookie'.$request->question_id;
            Cookie::queue('responcookie', $setcookie, 10080);
            $user_id = Auth::id();
            $question_id = $request->question_id;
            $response = new Response();
            $response->response = 1;
            $response->answer_id = $request->answer;
            $response->save();
            $response->users()->attach($user_id);
        }else{
            $setcookie = 'setresponcookie'.$request->question_id;
            Cookie::queue('responcookie', $setcookie, 10080);
            $question_id = $request->question_id;
            $response = new Response();
            $response->response = 1;
            $response->answer_id = $request->answer;
            $response->save();
            }
            $request->session()->regenerateToken();
            return redirect(route('details', [$question_id]));
    }

}
