@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="list-group table-of-contents">
          <a class="list-group-item" href="/user_home">Home</a>
          <!-- <a class="list-group-item" href="needleman.php">Needleman</a>
          <a class="list-group-item" href="example2.php">Affinegap</a>
          <a class="list-group-item" href="jaccard.php">Jaccard</a> -->
          <a class="list-group-item" href="{{route('soalpelamar.index')}}">Soal</a>
          <a class="list-group-item" href="">Hasil</a>
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
            <div class="panel panel-success">
                <div class="panel-heading">Rekap</div>

                <div class="panel-body">
                  <h3 class="page-title">@lang('quickadmin.results.title')</h3>

                  <div class="panel panel-default">
                      <div class="panel-heading">
                          @lang('quickadmin.view-result')
                      </div>

                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <table class="table table-bordered table-striped">
                                      <tr>
                                          <th>@lang('quickadmin.results.fields.date')</th>
                                          <td>{{ $test->created_at or '' }}</td>
                                      </tr>
                                      <tr>
                                          <th>@lang('quickadmin.results.fields.result')</th>
                                          <td>{{ $test->result }}/10</td>
                                      </tr>
                                  </table>
                              <?php $i = 1 ?>
                              @foreach($results as $result)
                                  <table class="table table-bordered table-striped">
                                      <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                                          <th style="width: 10%">Question #{{ $i }}</th>
                                          <th>{{ $result->question->question_text or '' }}</th>
                                      </tr>
                                      @if ($result->question->code_snippet != '')
                                          <tr>
                                              <td>Code snippet</td>
                                              <td><div class="code_snippet">{!! $result->question->code_snippet !!}</div></td>
                                          </tr>
                                      @endif
                                      <tr>
                                          <td>Options</td>
                                          <td>
                                              <ul>
                                              @foreach($result->question->options as $option)
                                                  <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                                      @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->option }}
                                                      @if ($option->correct == 1) <em>(correct answer)</em> @endif
                                                      @if ($result->option_id == $option->id) <em>(your answer)</em> @endif
                                                  </li>
                                              @endforeach
                                              </ul>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Answer Explanation</td>
                                          <td>
                                          {!! $result->question->answer_explanation  !!}
                                              @if ($result->question->more_info_link != '')
                                                  <br>
                                                  <br>
                                                  Read more:
                                                  <a href="{{ $result->question->more_info_link }}" target="_blank">{{ $result->question->more_info_link }}</a>
                                              @endif
                                          </td>
                                      </tr>
                                  </table>
                              <?php $i++ ?>
                              @endforeach
                              </div>
                          </div>

                          <p>&nbsp;</p>

                          <a href="{{ route('tests.index') }}" class="btn btn-default">Take another quiz</a>
                          <!-- <a href="{{ route('results.index') }}" class="btn btn-default">See all my results</a> -->
                      </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>




@stop
