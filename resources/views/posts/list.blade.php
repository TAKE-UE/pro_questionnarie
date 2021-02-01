@extends('layouts.default')

{{-- @section('title')
お好きなアンケート
@endsection
上と一緒の命令↓ --}}

@section('title', 'ゆるいあんけーと')

@section('headaer')
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('login') }}">login</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          メニュー
        </a>
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/') }}">アンケート制作</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('register') }}">アカウント作成</a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
@endsection

@section('content')
  <ul class="list">  
    @forelse ($questiones as $question)
      <li>
      <a href="{{ action('PostController@details', $question->id) }}">{{ $question->question }}</a>
      </li>
    @empty
      <li>No comments yet</li>
    @endforelse
  </ul>

  <div class="d-flex justify-content-center">
    {{ $questiones->links() }}
  </div>
@endsection


@section('footer')
@endsection