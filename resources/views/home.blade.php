@extends('layouts.default')
@section('headaer')
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    @if (Route::has('register'))
        <h2>みんなのアンケート</h2>
    @endif
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          メニュー
        </a>
        Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set!
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/posts/list') }}">アンケート一覧</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('register') }}">アカウント作成</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav ml-auto">
        Authentication Links
        @guest
           <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @if (Route::has('register'))
            <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
            </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </div>
</nav> -->
@endsection('headaer')
@section('content')
  <div class="card-body">
    @if (session('status'))
       <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
    @endif
      <h2>製作したアンケート一覧</h2>
         <ul>
    @forelse ($auth->questionnaires as $questionnaire)
            <li>
              <a href="{{ action('PostController@store',$questionnaire->id) }}">{{ $questionnaire->question }}</a>
                <button tpye="sbmit" class="btn btn-primary" data-toggle="modal" data-target="#modal-example">削除</button>
            </li>
          <div class="modal fade" id="modal-example">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> -->
                  <!-- <h4 class="modal-title" id="modal">削除しますか？</p> -->
                </div>
                <form action="{{ action('PostController@deleted', $questionnaire->id) }}" method="post">
                {{ csrf_field() }}
                  <div class="modal-body">
                    <p>削除してもいいのですか？</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">思いとどまる</button>
                    <button type="submit" class="btn btn-primary">決定する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
    @empty
            <li>No comments yet</li>
    @endforelse
          </ul>
        <h2>回答したアンケート</h2>
          <ul>
    @forelse ($auth->responses as $responses)
              <li>
                <a href="{{ action('PostController@show', $responses->answer->id) }}">{{ $responses->answer->answer }}</a>
              </li>
    @empty
              <li>No comments yet</li>
    @endforelse
          </ul>
  </div>
@endsection('content')
  @section('footer')
    <!-- <nav class="navbar navbar-expand-md navbar-light justify-content-end bg-light">
      <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end pr-5" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ url('/posts/list') }}">アンケート一覧<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            <a class="nav-item nav-link" href="{{ url('/') }}">アンケート作成</a>
          </div>
        </div>
      </div>
    </nav> -->
  @endsection('footer')
