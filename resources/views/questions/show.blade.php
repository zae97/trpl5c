@extends('layouts.master')


@section('content')
    <h3 class="page-title">Detail Soal</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            detail
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>Kategori Soal</th>
                    <td>{{ $question->topic->title or '' }}</td>
                    </tr><tr><th>Soal</th>
                    <td>{!! $question->question_text !!}</td></tr>
                    <!-- <tr>
                    <th></th>
                    <td>{!! $question->code_snippet !!}</td></tr> -->
                    <tr><th>Penjalasan Jawaban</th>
                    <td>{!! $question->answer_explanation !!}</td></tr>
                    <!-- <tr><th>Detail</th>
                    <td>Link</td></tr> -->
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions.index') }}" class="btn btn-default">@lang('back to list')</a>
        </div>
    </div>
@stop
