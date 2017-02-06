@extends('layouts.app')

@section('content')
<div class="panel-heading">Edit: {!! $movie->title !!}</div>
<div class="panel-body">
{!! Form::model($movie, ['class'=>'form-horizontal', 'method'=>'PATCH', 'action'=>['MoviesController@update', $movie->id]]) !!}
    @include("movies._form", ['submitButtonText'=>'Update Movie'])
{!! Form::close() !!}
</div>
@endsection
