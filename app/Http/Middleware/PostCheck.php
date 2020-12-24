<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use App\Questionnaire;
use App\Response;
use App\Answer;
use Carbon\Carbon;


class PostCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //パラメーター情報をこちらで取得
        $master_id = $request->route()->parameter('id');
        
        //現在の時刻を取得
        $deta_time = Carbon::now('Asia/Tokyo');
        //questionを制作した時刻を取得valueでcreated_atのみを取得する。
        $deta_time_que = Questionnaire::where('id', $master_id)->value('created_at');
        //現在の時刻と制作した時刻の差を変数に
        $deta_time_response = $deta_time->diffInHours($deta_time_que);
        //cookieを取得
        $rescookie = $request->cookie('responcookie');
        //setしたcookieの値を変数に
        $reqcookie = Questionnaire::where('id', $master_id)->value('id');
        //
        if ($deta_time_response >= 168 || $rescookie === "setresponcookie".$reqcookie){
            return $next($request);
                }
            //リダイレクト先にパラメーターを渡す
            return redirect(route('poll.id', [
                $master_id
            ]));
            }
    
}
