@extends('layouts.master')


@section('content')
    <h3 class="page-title">@lang('Edit Kriteria')</h3>

    {!! Form::model($topic, ['method' => 'PUT', 'route' => ['topics.update', $topic->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Title*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit(trans('Simpan Perubahan'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
