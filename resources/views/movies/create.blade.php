@extends('layouts.app')

@section('content')
<div class="panel-heading">Add a Movie</div>
<div class="panel-body">
    {!! Form::open(['url' => 'movies', 'class'=>'form-horizontal']) !!}
        @include("movies._form", ['submitButtonText'=>'Add Movie'])
    {!! Form::close() !!}
</div>
@endsection
