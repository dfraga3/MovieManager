@extends('layouts.app')

@section("content")
<div class="panel-heading">
    <div class="row">
        <h1 class="col-md-9">Diane's Movie Manager</h1>
        <div class="col-md-2">
            <a href="{{ route('movies.index') }}"><img src="/img/FS_Cans.png" /></a>
        </div>
    </div>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('movies.index') }}"><img src="/img/Phenomena.jpg" class="img-responsive" /></a>
        </div>
        <div class="col-md-8">
            <p>
                Welcome!  We love movies.  Maybe a little TOO much.  It is an occupational hazard having a photographer,
                videographer, filmmaker, special effects artist, and master 3D creator and compositor
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae fringilla orci, sit amet fermentum massa.
                Etiam blandit vehicula magna, at sollicitudin arcu. Donec rhoncus mi sem. Nunc venenatis, diam nec finibus
                tristique, erat lorem laoreet enim, vel fringilla quam nulla eget nibh. Sed ultrices porttitor diam vitae
                tempor. Fusce tellus elit, condimentum ac dolor vel, ornare scelerisque eros. Cras eget turpis suscipit, rutrum
                risus cursus, luctus magna. Nullam laoreet feugiat erat, lacinia tempor tortor sollicitudin in. Suspendisse
                potenti. Vestibulum in efficitur risus. Donec laoreet lacus a justo interdum, nec consectetur tellus ultricies.
                Curabitur nec dapibus erat, non consequat mauris. Vivamus tempor justo purus, mollis pretium sapien bibendum in.
            </p>
            <p>
                Nam eu tincidunt orci. Etiam efficitur interdum ex, id ultrices erat. Proin ultricies purus sed euismod
                porttitor. Donec facilisis consectetur blandit. Class aptent taciti sociosqu ad litora torquent per conubia
                nostra, per inceptos himenaeos. Mauris sollicitudin sapien dictum, consectetur lectus sit amet,
                sagittis nibh. Phasellus elementum vel metus sit amet pharetra. Fusce id varius nisi.
                Etiam sagittis in ipsum ac pellentesque. Aliquam pharetra ex vitae elit scelerisque gravida.
                Suspendisse ut odio mattis, rutrum purus sed, sagittis lectus.
            </p>
        </div>
    </div>
    <hr />
    <div class="col-md-offset-8">
        <a href="{{ route('movies.index') }}" class="btn btn-info">View Movies</a>
        <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
    </div>
</div>
@endsection
