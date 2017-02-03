@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a Movie</h1>
        <hr/>

        {!! Form::open(['url' => 'movies']) !!}
            @include("movies._form", ['submitButtonText'=>'Add Movie'])
        {!! Form::close() !!}

        @include ('errors.list')
    </div>
@stop
