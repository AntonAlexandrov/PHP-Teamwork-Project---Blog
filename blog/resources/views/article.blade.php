@extends('template.main')
@section('title'){{$post->title}}@endsection
@section('content')
    @include('template.partials.main-navbar')
    <div class="row-fluid">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <br/>
                <img src="{{$post->photo}}" title="{{$post->title}}"/>
                <br/>
                <h2>{{$post->title}}</h2>
                <hr/>
                <p class="text-justify">
                    {!! $post->content !!}
                </p>
                <br/>
                <div class="fb-comments" data-href="http://localhost:8000/articles/{{$post->slug}}"
                     data-width="100%" data-numposts="9" data-colorscheme="light"></div>
                <a href="{{route('home')}}" class="btn btn-primary"><i class="fa
                fa-chevron-left">Back</i></a>
                <br/>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </div>
@stop