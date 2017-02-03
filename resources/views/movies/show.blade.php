@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-3"><strong><a href="{{ route('movies.edit', [$movie->id]) }}">{{ $movie->title  }}</a></strong></div>
            <div class="col-xs-3 col-sm-2"><strong>Year:</strong>   {{ $movie->year }}</div>
            <div class="col-xs-2 col-sm-2"><strong>Length:</strong> {{ convertToHoursMins($movie->length, '%2d hr %02d m') }}</div>
            <div class="col-xs-3 col-sm-2"><strong>Format:</strong> {{ displayFormat($movie->format) }}</div>
            <div class="col-xs-4 col-sm-3">
                <strong>Rating:</strong> <span class="rating-static rating-{{ $movie->rating }}0"></span>
            </div>
        </div>
        <br />
        @if (Auth::guest())
            <div class="col-xs-12 col-sm-12 col-md-12" align="center">
                <a href="{{ url('/login') }}" class="btn btn-primary">Login In</a>
            </div>
        @else
            <div class="col-md-6 pull-left">
                <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
            </div>

            <div class="col-md-4 pull-right">
                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-info">Edit Movies</a>
                <a href="{{ route('movies.index') }}" class="btn btn-primary">Delete Movie</a>
            </div>
        @endif
    </div>
@stop
