@extends('user.layouts')

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
          {!! Form::open(['method' => 'POST', 'route' => ['tests.store']]) !!}

          <div class="panel panel-default">
              <div class="panel-heading">
                Warning!!
              </div>
              <div class="panel-body">
                <h1>Silahkan Mengerjakan Soal terlebih dahulu</h1>
              </div>
          </div>
          </div>

          <!-- {!! Form::submit(trans('quickadmin.submit_quiz'), ['class' => 'btn btn-danger']) !!} -->
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
