@extends('layouts.default')

{{-- @section('title')
お好きなアンケート
@endsection
上と一緒の命令↓ --}}

@section('title', 'ゆるいあんけーと')

@section('headaer')
<link rel="stylesheet" href="{{ asset('css/bar-chart.css') }}">
<!-- <div class="container"> -->
        <!-- <nav class="row navbar navbar-expand-xl navbar-dark bg-dark">
          <button class="navbar-toggle" data-target="#navmenu1" aria-controls="navmenu1" type="button" data-toggle="collapse" aria-label="Toggle navigation" aria-expanded="false">
            Action
          </button>
          <div class="navbar-collapse" id="navmenu1">
            <ul class="navbar-nav">
              <li><a class="nav-link nav-itme" href="{{ url('/posts/list') }}">アンケート一覧</a></il>
              <li><a class="nav-link nav-itme" href="{{ route('register') }}">{{ __('Register') }}</a></il>
              <li><a class="nav-link nav-itme" href="{{ route('login') }}">{{ __('Login') }}</a></il>
            </ul>
          </div> -->
        <!-- <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <button class="navbar-toggle" data-target="#navmenu1" data-toggle="collapse" aria-controls="navmenu1" aria-label="Toggle navigation" aria-expanded="false" type="button">
          </button>
          <div class="collapse navbar-collapse">
            <div class="navbar-nav ml-auto">
            <ul class="nav-item">
              <a class="nav-link nav-item" href="{{ url('/posts/list') }}">アンケート一覧</a>
              <a class="nav-link nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
              <a class="nav-link nav-item" href="{{ url('/') }}">アンケート作成</a>
            </ul>
            </div>
          </div>
        </nav> -->
  <!-- </div> -->

@endsection

@section('content')
<div class="row1">
  <h3>{{$questionUe->question}}</h3>
  <ul>
    @forelse ($questionUe->answers as $answers)
    @foreach($answer_re as $response)
        @if($loop->index === $loop->parent->index && !empty($answer_sum))
          <li calss='list-color'>
            {{ $answers->answer }}
            <div class='bar'>
              <div class='bar-info js' data-total='{{ $response / $answer_sum * 100 }}'>
                {{ $response }}票
                <span class='percent'>{{ ceil($response / $answer_sum * 100) }}</span>
              </div>
            </div>
          </li>
            @elseif($loop->index === $loop->parent->index)
            <li calss='list-color'>
                {{ $answers->answer }}
                <div class='bar'>
                  <div class='bar-info js' data-total='{{ $response }}'>
                    {{ $response }}票
                    <span class='percent'>{{ $response }}</span>
                  </div>
                </div>
              </li>
        @endif
      @endforeach

      <!-- <li>
        {{ $answers->answer }}
      </li> -->
        @empty
        <li>No comments yet</li>
  </ul>
  @endforelse
</div>
@endsection


@section('footer')
<div class="footer">
</div>
<script src="{{ asset('js/bar-chart.js') }}"></script>
@endsection