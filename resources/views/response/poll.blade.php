@extends('layouts.default')

{{-- @section('title')
お好きなアンケート
@endsection
上と一緒の命令↓ --}}

@section('title', 'ゆるいあんけーと')

@section('headaer')
  <ul>
    <li><a href="{{ url('/posts/list') }}">アンケート一覧</a></li>
  </ul>
@endsection

@section('content')
<h3>{{ $details->question }}</h3>
  <form action="{{ action('ResponseController@responsePoll') }}" method="post" name="">
    @csrf
    @foreach ($details->answers as $detail)
      <ul>
        <li>
        <input type="hidden" name="question_id" value="{{ $details->id }}">
        <button type="submit" name="answer" value="{{ $detail->id }}">{{ $detail->answer }}</button>
        </li>
      </ul>
    @endforeach
  </form>
@endsection
          
       



@section('footer')
  <div class="footer">
  
  </div>
@endsection