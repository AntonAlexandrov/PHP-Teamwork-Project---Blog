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
        </div>
    </header>
    <div class="row-fluid">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @foreach($posts as $p)
                    <h2 class="text-center">{{$p->title}}</h2>
                    <div align="center">
                        <img src="{{$p->photo}}" alt=""/>
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
                            <label class="label label-primary">{{$t}}</label>
                        @endforeach
                    </div>
                    <br/>
                    <div align="center">
                        <a href="#" class="btn btn-info">Read more...</a>
                    </div>
                    <hr/>
                @endforeach
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@stop