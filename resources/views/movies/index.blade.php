@extends('layouts.app')

@section('content')
<div class="panel-heading">List of Movies</div>
<div class="panel-body">

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 panel-title"><strong>Title</strong></div>
        <div class="col-xs-3 col-sm-1 col-md-1 panel-title"><strong>Year</strong></div>
        <div class="col-xs-2 col-sm-2 col-md-2 panel-title"><strong>Length</strong></div>
        <div class="col-xs-3 col-sm-2 col-md-2 panel-title"><strong>Format</strong></div>
        <div class="col-xs-2 col-sm-2 col-md-2 panel-title"><strong>Rating</strong></div>
    </div>

    @foreach($movies as $movie)
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3"><strong><a href="{{ route('movies.edit', [$movie->id]) }}">{{ $movie->title  }}</a></strong></div>
            <div class="col-xs-3 col-sm-1 col-md-1">{{ $movie->year }}</div>
            <div class="col-xs-2 col-sm-2 col-md-2">{{ convertToHoursMins($movie->length, '%2d hr %02d m') }}</div>
            <div class="col-xs-3 col-sm-2 col-md-2">{{ displayFormat($movie->format) }}</div>
            <div class="col-xs-2 col-sm-2 col-md-2"><span class="rating-static rating-{{ $movie->rating }}0"></span></div>
        </div>
    @endforeach

</div>
@endsection


