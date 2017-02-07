@extends('layouts.app')

@section('content')
<div class="panel-heading">List of Movies</div>
<div class="panel-body">
    <form class="form-horizontal" method="get" action="{{ url('movies') }}" id="sortForm">
        <div class="form-group">
            <div class="col-md-offset-9">
                <label for="sortBy" class="control-label">Sort By:</label>
                <select name="sortBy" id="sortBy">
                    @foreach($sortOptions as $sortOption)
                        <option value="{{ $sortOption }}" {{ $selectedSort == strtolower($sortOption) ? 'selected="selected"' : '' }}>{{ $sortOption }}</option>
                    @endforeach
                </select>
                <select name="sortDir" id="sortDir">
                    <option value="asc" {{ $selectedDir == "asc" ? 'selected="selected"' : '' }}>ASC</option>
                    <option value="desc" {{ $selectedDir == "desc" ? 'selected="selected"' : '' }}>DESC</option>
                </select>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 panel-title"><strong>Title</strong></div>
        <div class="col-xs-3 col-sm-1 col-md-1 panel-title"><strong>Year</strong></div>
        <div class="col-xs-2 col-sm-2 col-md-2 panel-title"><strong>Length</strong></div>
        <div class="col-xs-3 col-sm-2 col-md-2 panel-title"><strong>Format</strong></div>
        <div class="col-xs-2 col-sm-2 col-md-2 panel-title"><strong>Rating</strong></div>
        @if (Auth::guest())
        @else
            <div class="col-xs-2 col-sm-2 col-md-2 panel-title">Action</div>
        @endif
    </div>

    @foreach($movies as $movie)
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3"><strong><a href="{{ route('movies.edit', [$movie->id]) }}">{{ $movie->title  }}</a></strong></div>
            <div class="col-xs-3 col-sm-1 col-md-1">{{ $movie->year }}</div>
            <div class="col-xs-2 col-sm-2 col-md-2">{{ convertToHoursMins($movie->length, '%2d hr %02d m') }}</div>
            <div class="col-xs-3 col-sm-2 col-md-2">{{ displayFormat($movie->format) }}</div>
            <div class="col-xs-2 col-sm-2 col-md-2"><span class="rating-static rating-{{ $movie->rating }}0"></span></div>
            @if (Auth::guest())
            @else
                <div class="col-xs-2 col-sm-2 col-md-2"><a href="{{url('/movies/'.$movie->id.'/delete')}}">delete</a></div>
            @endif
        </div>
    @endforeach
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" align="center">
            <br /><br />
            @if (Auth::guest())
                <a href="{{ url('/login') }}" class="btn btn-primary">Login In</a>
            @else
                <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
            @endif
        </div>
    </div>
</div>
@endsection

@section('jQuery')
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#sortBy, #sortDir').change(function() {
            $("#sortForm").submit();
        });
    });
</script>
@endsection



