@extends('template.main')
@section('title'){{'Blog'}}@endsection
@section('content')
    @foreach($posts as $p)
        <div class="col-md-4" style="min-height: 40vh; background-image: url('{{$p->photo}}'); background-size: cover; background-position:
                center; border-bottom: 3px solid #ffffff;">
            <div class="blur">
                <div id="taggex" class="specElite">
                    <a href="../articles/{{$p->slug}}" style="color: #ffffff;">{{$p->title}}</a>
                </div>
            </div>
        </div>
    @endforeach
@stop