<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Movie Title:', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Movie Title']) !!}
        @if ($errors->has("title"))
            <span class="help-block"><strong>{{ $errors->first("title") }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
    {!! Form::label('year', 'Year Released:', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('year', null, ['class' => 'form-control', 'placeholder'=>'Year movie was released']) !!}
        @if ($errors->has("year"))
            <span class="help-block"><strong>{{ $errors->first("year") }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('length') ? ' has-error' : '' }}">
    {!! Form::label('length', 'Length (mins):', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('length', null, ['class' => 'form-control', 'placeholder'=>'Length of movie in minutes, e.g. 135']) !!}
        @if ($errors->has("length"))
            <span class="help-block"><strong>{{ $errors->first("length") }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
    {!! Form::label('rating', 'Rating:', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::radio('rating', 1, ['class'=>'form-control']) !!} <span class="rating-static rating-10"></span><br />
        {!! Form::radio('rating', 2, ['class'=>'form-control']) !!} <span class="rating-static rating-20"></span><br />
        {!! Form::radio('rating', 3, ['class'=>'form-control']) !!} <span class="rating-static rating-30"></span><br />
        {!! Form::radio('rating', 4, ['class'=>'form-control']) !!} <span class="rating-static rating-40"></span><br />
        {!! Form::radio('rating', 5, ['class'=>'form-control']) !!} <span class="rating-static rating-50"></span>
        @if ($errors->has("rating"))
            <span class="help-block"><strong>{{ $errors->first("rating") }}</strong></span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('format') ? ' has-error' : '' }}">
    {!! Form::label('format', 'Format:', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('format', (['--Select Format--','VHS', 'DVD', 'Streaming']), null, ['class'=> 'form-control']) !!}
        @if ($errors->has("format"))
            <span class="help-block"><strong>The format must be VHS, DVD, or Streaming.</strong></span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        {!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary', 'name'=>'Update']) !!}
    </div>
</div>