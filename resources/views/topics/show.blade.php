@extends('layouts.master')


@section('content')
    <h3 class="page-title">Detail Kriteria</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            Detail
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>nama kriteria</th>
                    <td>{{ $topic->title }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('topics.index') }}" class="btn btn-default">back</a>
        </div>
    </div>
@stop
