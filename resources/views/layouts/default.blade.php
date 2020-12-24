<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://kit.fontawesome.com/8dc2a69a82.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <title>@yield('title')</title>
</head>
<body>
  <div>
    @yield('headaer')
    @guest
          <nav class="navbar navbar-expand-md navbar-light justify-content-end bg-light shadow-sm">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse justify-content-end pr-5" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="{{ url('/posts/list') }}">アンケート一覧<span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  <a class="nav-item nav-link" href="{{ url('/') }}">アンケート作成</a>
                </div>
              </div>
            </div>
          </nav>
        @else
          <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu2" aria-haspopup="true" aria-controls="navmenu2" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse justify-content-end pr-5" id="navmenu2">
                <div class="navbar-nav">
                  <span class="navbar-text">{{Auth::user()->name}}</span>
                  <a class="nav-item nav-link" href="{{ url('/posts/list') }}">アンケート一覧</a>
                  <a class="nav-item nav-link" href="{{ url('/') }}">アンケート作成</a>
                  <a class="nav-item nav-link" href="{{ url('/home') }}">作成したアンケート</a>
                  <!-- <a class="nav-item nav-link" href="{{ url('/home') }}">投稿したアンケート</a> -->
                  <a class="navbar-itme nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                      @csrf
                  </form>
              </div>
            </div>
          </nav>
      @endguest
  </div>
  <div class="container-fluid col-lg-12 row1">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>