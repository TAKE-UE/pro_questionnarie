@extends('layouts.default')

{{-- @section('title')
お好きなアンケート
@endsection
上と一緒の命令↓ --}}

@section('title', 'ゆるいあんけーと')
@section('headaer')
<link rel="stylesheet" href="{{ asset('css/bar-chart.css') }}">
@endsection

@section('content')
<h3> {{ $details->question }} </h3>
     <!-- ネスト（入れ子）されている場合はloopで親と子のループを合わせてる -->
        <!-- data-totalで％を出しているceilは小数点を切り上げ -->
  <ul>
    @forelse ($details->answers as $detail)
     @foreach($answer_re as $response)
        @if($loop->index === $loop->parent->index && !empty($answer_sum))
          <li calss='list-color'>
            {{ $detail->answer }}
            <div class='bar'>
              <div class='bar-info js' data-total='{{ $response / $answer_sum * 100 }}'>
                {{ $response }}票
                <span class='percent'>{{ ceil($response / $answer_sum * 100) }}</span>
              </div>
            </div>
          </li>
            @elseif($loop->index === $loop->parent->index)
            <li calss='list-color'>
                {{ $detail->answer }}
                <div class='bar'>
                  <div class='bar-info js' data-total='{{ $response }}'>
                    {{ $response }}票
                    <span class='percent'>{{ $response }}</span>
                  </div>
                </div>
              </li>
        @endif
      @endforeach
        @empty
          <li>
            No comments yet
          </li>
    @endforelse
  </ul>
@endsection


@section('footer')
  <div class="footer">
    <ul>
    
    </ul>
  </div>
  <script src="{{ asset('js/bar-chart.js') }}"></script>
@endsection
