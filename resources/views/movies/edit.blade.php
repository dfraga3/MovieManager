@extends('layouts.app')

@section("content")
    <div class="container">
        <h1>Edit: {!! $movie->title !!}</h1>
        <hr />

        {!! Form::model($movie, ['method'=>'PATCH', 'action'=>['MoviesController@update', $movie->id]]) !!}
            @include("movies._form", ['submitButtonText'=>'Update Movie'])
        {!! Form::close() !!}

        @include('errors.list')
    </div>
@stop