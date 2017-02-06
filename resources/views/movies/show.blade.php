@extends('layouts.app')

@section('content')
<div class="panel-heading">
    Delete: {!! $movie->title !!}<br />
    <div class="alert alert-danger"><strong>Are you SURE you want to delete this movie?</strong></div>
</div>
<div class="panel-body">
    {!! Form::model($movie, ['class'=>'form-horizontal', 'method'=>'delete', 'action'=>['MoviesController@destroy', $movie->id]]) !!}
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        {!! Form::label('title', 'Movie Title:', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">{{ $movie->title }}</div>
    </div>

    <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
        {!! Form::label('year', 'Year Released:', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">{{ $movie->year }}</div>
    </div>

    <div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
        {!! Form::label('length', 'Length (mins):', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">{{ convertToHoursMins($movie->length, '%2d hr %02d m') }}</div>
    </div>

    <div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
        {!! Form::label('rating', 'Rating:', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6"><span class="rating-static rating-{{ $movie->rating }}0"></span></div>
    </div>

    <div class="form-group{{ $errors->has('format') ? ' has-error' : '' }}">
        {!! Form::label('format', 'Format:', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">{{ displayFormat($movie->format) }}</div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            {!! Form::submit('Delete Movie', ['class'=> 'btn btn-primary', 'name'=>'Delete']) !!}
            <a href="{{ route('movies.index') }}" class="btn btn-info">Do NOT Delete</a>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
