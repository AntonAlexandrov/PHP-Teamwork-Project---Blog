@extends('template.main')
@section('title'){{'Blog'}}
@endsection
@section('content')
    <header>
        <div class="blur">
            <div id="title" class="specElite">
                Team "LAKE MEAD" Blog
            </div>
            <div id="subtitle" class="specElite">
                Some shitty content.
            </div>
            <div id="subtitle" class="specElite">
                @if(isset(Auth::user()->name))
                    Hello, {{{Auth::user()->name}}}!
                    <a href="/auth/logout">Logout</a>
                    @else
                    Welcome, Stranger!
                    <a href="/auth/login">Login</a>
                    <a href="/auth/register">Register</a>
                    @endif
            </div>
            <div id="subtitle" class="specElite">

            </div>
        </div>
    </header>
    <div class="row-fluid">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @foreach($posts as $p)
                    <a href='articles/{{$p->slug}}'><h2
                                class="text-center">{{$p->title}}</h2></a>
                    <div align="center">
                        <a href='articles/{{$p->slug}}'><img
                                    src="{{$p->photo}}" alt=""/></a>
                    </div>
                    <br />
                    <h5 class="text-justify">
                        {{substr($p->content, 0, 150) . '...'}}
                    </h5>
                    <div align="center">

                    </div>
                    <div align="center">
                        <?php
                        $tags = preg_split('/\s*,\s*/', $p->tags);
                        ?>
                        @foreach($tags as $t)
                            <a href="tag/{{$t}}"><label class="label label-primary">{{$t}}</label></a>
                        @endforeach
                    </div>
                    <br/>
                    <div align="center">
                        <a href='articles/{{$p->slug}}' class="btn btn-info">Read more...</a>
                    </div>
                    <hr/>
                @endforeach
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@stop