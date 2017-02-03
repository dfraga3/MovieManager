<div class="form-group">
    {!! Form::label('title', 'Movie Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Movie Title']) !!}
</div>

<div class="form-group">
    {!! Form::label('year', 'Year Released:') !!}
    {!! Form::text('year', null, ['class' => 'form-control', 'placeholder'=>'Year movie was released']) !!}
</div>

<div class="form-group">
    {!! Form::label('length', 'Length (mins):') !!}
    {!! Form::text('length', null, ['class' => 'form-control', 'placeholder'=>'Length of movie in minutes, e.g. 135']) !!}
</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-1">
            {!! Form::label('rating', 'Rating:') !!}
        </div>
        <div class="col-md-11">
            {!! Form::radio('rating', 1, ['class' => 'form-control']) !!} <span class="rating-static rating-10"></span><br />
            {!! Form::radio('rating', 2, ['class' => 'form-control']) !!} <span class="rating-static rating-20"></span><br />
            {!! Form::radio('rating', 3, ['class' => 'form-control']) !!} <span class="rating-static rating-30"></span><br />
            {!! Form::radio('rating', 4, ['class' => 'form-control']) !!} <span class="rating-static rating-40"></span><br />
            {!! Form::radio('rating', 5, ['class' => 'form-control']) !!} <span class="rating-static rating-50"></span>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('format', "Format:") !!}<br />
    {!! Form::select('format', (['--Select Format--','VHS', 'DVD', 'Streaming']), null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=> 'btn btn-primary form-control']) !!}
</div>