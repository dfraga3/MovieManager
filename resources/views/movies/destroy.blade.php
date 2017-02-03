@extends('layouts.app')

@section("content")
    <div class="container">
        <h1>Delete: {!! $movie->title !!}</h1>
        <hr />

        {!! Form::model($movie, ['method'=>'PATCH', 'action'=>['MoviesController@destroy', $movie->id]]) !!}
        @include("movies._form", ['submitButtonText'=>'Delete Movie'])
        {!! Form::close() !!}

        @include('errors.list')
    </div>
@stop