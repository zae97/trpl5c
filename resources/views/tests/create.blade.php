@extends('user.layouts2')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="list-group table-of-contents">
          <a class="list-group-item" href="/user_home">Home</a>
          <!-- <a class="list-group-item" href="needleman.php">Needleman</a>
          <a class="list-group-item" href="example2.php">Affinegap</a>
          <a class="list-group-item" href="jaccard.php">Jaccard</a> -->
          <a class="list-group-item" href="/tests">Soal</a>
          <a class="list-group-item" href="{{route('hasil.index')}}">Hasil</a>
          <a class="list-group-item" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                   href="{{ route('logout') }}">
                   Logout
          </a>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <!-- <a class="list-group-item" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                   href="{{ route('logout') }}">
                   Logout
          </a> -->
        </div>
      </div>
        <div class="col-lg-9 col-md-3 col-sm-4">
          <!-- <h3 class="page-title">@lang('quickadmin.laravel-quiz')</h3> -->
          {!! Form::open(['method' => 'POST', 'name'=>'myForm', 'id'=>'myForm', 'route' => ['tests.store']]) !!}
        <!-- <form class="" name="myForm" action="{{ route('tests.store') }}" id="myForm" method="post"> -->


          <div class="panel panel-default">
              <div class="panel-heading">
                  Soal
              </div>
              <?php //dd($questions) ?>
          @if(count($questions) > 0)
              <div class="panel-body">
              <?php $i = 1; ?>
              @foreach($questions as $question)
                  @if ($i > 1) <hr /> @endif


                          <div class="form-group">
                              <strong>Question {{ $i }}.<br />{!! nl2br($question->question_text) !!}</strong>

                              @if ($question->code_snippet != '')
                                  <div class="code_snippet">{!! $question->code_snippet !!}</div>
                              @endif

                              <input
                                  type="hidden"
                                  name="questions[{{ $i }}]"
                                  value="{{ $question->id }}">
                          @foreach($question->options as $option)
                              <br>
                              <label class="radio-inline">
                                  <input
                                      type="radio"
                                      name="answers[{{ $question->id }}]"
                                      value="{{ $option->id }}">
                                  {{ $option->option }}
                              </label>
                          @endforeach
                          </div>

              <?php $i++; ?>
              @endforeach
              </div>
          @endif
          </div>

          <!-- <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Lanjutkan
                  </button>
              </div>
          </div> -->
            {!! Form::submit(trans('Submit'), ['class' => 'btn btn-danger']) !!}
          <!-- </form> -->
          {!! Form::close() !!}
      @stop
      @section('javascript')
          @parent
          <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
          <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
          <script>
              $('.datetime').datetimepicker({
                  autoclose: true,
                  dateFormat: "{{ config('app.date_format_js') }}",
                  timeFormat: "hh:mm:ss"
              });
          </script>

      @stop
