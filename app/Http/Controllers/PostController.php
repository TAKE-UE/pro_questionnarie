<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Questionnaire;
use App\Response;
use App\Answer;
use App\QuestionnaireUser;
use Carbon\Carbon;

class PostController extends Controller
{

    public function index(){
        return view('posts.index');
    }

    public function create(Request $request){
        $request->validate([
            'question' => 'required|min:3',
            //配列のバリデーション添え字が0から
            'answer.*' => 'required|min:1',
            ],
            [
                'question.required' => 'アンケートタイトルは必須です',
                'answer.*.required' => '回答を1つ以上設定してください'
            ]);
            if(Auth::check()){
                $questions = new Questionnaire;
                $questions->question = $request->question;
                $questions->save();
    foreach  ($request->answer as $key => $val){
                $answers = new Answer;
                $answers->answer = $val;
                $answers->questionnaire_id = $questions->id;
                $answers->save();
            }
                $question_user = new QuestionnaireUser;
                $question_user->questionnaire_id = $questions->id;
                $question_user->user_id = Auth::id();
                $question_user->save();
        }else{
                $questions = new Questionnaire;
                $questions->question = $request->question;
                $questions->save();
    foreach  ($request->answer as $key => $val){
                $answers = new Answer;
                $answers->answer = $val;
                $answers->questionnaire_id = $questions->id;
                $answers->save();
            }
        }
        return redirect('posts/list');
    }

    public function store($id){ //引数でログイン中のidを受け取っている

        $detail = Questionnaire::with('answers')->find($id);
        foreach ($detail->answers as $details){
        $deta[] = $details->id;
        }
//      clickされた$idを受け取り紐づいているquestionをリレーションで取ってくる
        $details = Questionnaire::find($id);
//      配列を引き出してresponseにあるanswer_idを集計し配列に入れ直す。
        foreach ($deta as $key => $val){
            $answer_re[] = Response::where('answer_id', $val)->count();
        }
        //配列内の数値の合計
        $answer_sum = array_sum($answer_re);

        return view('posts.store')->with([
            'details' => $details,
            'answer_re' => $answer_re,
            'answer_sum' => $answer_sum,
            ]);
    }

    public function show($id){ //引数でログイン中のidを受け取っている
        $questionUe = Answer::find($id)->questionnaire;
            foreach ($questionUe->answers as $details){
                $deta[] = $details->id;
            }
    //      clickされた$idを受け取り紐づいているquestionをリレーションで取ってくる
            $details = Questionnaire::find($id);
    //      配列を引き出してresponseにあるanswer_idを集計し配列に入れ直す。
            foreach ($deta as $key => $val){
                $answer_re[] = Response::where('answer_id', $val)->count();
            }
            //配列内の数値の合計
            $answer_sum = array_sum($answer_re);

        return view('posts.show')->with([
            'questionUe' => $questionUe,
            'answer_re' => $answer_re,
            'answer_sum' => $answer_sum,
        ]);
    }

    public function list(){
        $questiones = Questionnaire::paginate(10);
        return view('posts.list')->with([
            'questiones' => $questiones
        ]);
    }

    public function deleted($id){
        $ue_question = \App\Questionnaire::find($id);
        $ue_question->delete();
        return redirect('/home');
    }

    public function details($id){
    //     現在の時刻を取得
    //     $deta_time = Carbon::now('Asia/Tokyo');
    //     questionを制作した時刻を取得valueでcreated_atのみを取得する。
    //     $deta_time_que = Questionnaire::where('id', $id)->value('created_at');
    //     現在の時刻と制作した時刻の差を変数に
    //     $deta_time_response = $deta_time->diffInHours($deta_time_que);

    //     if ($deta_time_response >= 168){
    //     リレーション先のデータも一緒に取れるQuestionnaireに紐づいているテーブルを配列に変換して取得
    //     $detail = Questionnaire::with('answers')->find($id)->toArray();
    //     foreachで回すのでオブジェクトで取得上記のコードだと型が違うのでerrorが出る
        $detail = Questionnaire::with('answers')->find($id);
            foreach ($detail->answers as $details){
            $deta[] = $details->id;
            }
    //      clickされた$idを受け取り紐づいているquestionをリレーションで取ってくる
        $details = Questionnaire::find($id);
    //      配列を引き出してresponseにあるanswer_idを集計し配列に入れ直す。
            foreach ($deta as $key => $val){
                $answer_re[] = Response::where('answer_id', $val)->count();
            }
            //配列内の数値の合計
            $answer_sum = array_sum($answer_re);

            return view('posts.details')->with([
                'details' => $details,
                'answer_re' => $answer_re,
                'answer_sum' => $answer_sum,
            ]);
    //     } else {
    //     $detail_response = Questionnaire::with('answers')->find($id);
    //         return redirect()->action('ResponseController@poll');
    //         // return view('response.poll')->with([ 'detail_response' => $detail_response ]);
    //         // return redirect()->action('ResponseController@poll')->with([
    //         //     'detail_response' => $detail_response
    //         // ]);
    //     }
     }

}
