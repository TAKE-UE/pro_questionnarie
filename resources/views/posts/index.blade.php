@extends('layouts.default')

{{-- @section('title')
お好きなアンケート
@endsection
上と一緒の命令↓ --}}

@section('title', 'ゆるいあんけーと')

@section('headaer')
@endsection

@section('content')
  <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-primary">{{__('Login')}}</button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{__('Register')}}</a>
                        @endif
                    @endauth
                </div>
  @endif -->
    <form method="post" action="{{ action('PostController@create') }}" class="quefrom">
      @csrf
        <div class="que"><input type="text" class="navbar-text" name="question" id="question" placeholder="質問内容を入れてください"></div>
        @if ($errors->has('question'))
          <span class="error">{{ $errors->first('question') }}</span>
        @endif
        <div class="answerarea">
          <input type="text" name="answer[]" class="ans" placeholder="質問の回答を入れてください">
          <button type="button" class="add btn btn-success btn-circle btn-circle-sm m-1" value="+"><i class="fas fa-plus"></i></button>
          <button type="button" class="del btn btn-danger btn-circle btn-circle-sm m-1" value="-"><i class="fas fa-minus"></i></button>
        </div>
        <!-- 配列のvalidate配列ドット記法で返ってくる -->
        @if ($errors->has('answer.*'))
          <span class="error">{{ $errors->first('answer.*') }}</span>
        @endif
        <!-- <div class="timefrom">
          <div><label for="">日：<select name="day" id="day"></select></label></div>
          <div><label for="">時間：<select name="time" id="time"></select></label></div>
          <div><label for="">分：<select name="minute" id="minute"></select></label></div>
        </div> -->
        <p>
        <button value="アンケート作成" class="btn btn-outline-secondary">アンケート作成</button>
        </p>
    </form>
@endsection

@section('footer')
  <div class="footer">
    <ul>
    
    </ul>
  </div>
  <script src="{{ asset('js/question.js') }}"></script>
@endsection