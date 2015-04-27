@extends('template.main')
@section('title'){{'Edit -> ' . $post->title }}@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center">
                    Edit Publication
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {!! Form::open(['url' => 'admin/posts/' . $post->id . '/refresh',
                'autocomplete' => 'off']) !!}
                    <fieldset>
                        <input type="text" name="title" value="{{$post->title}}"
                               class="form-control"/>
                        <br/>
                        <textarea name="content" id="editor" cols="30" rows="16"
                                  class="form-control">
                            {{$post->content}}
                        </textarea>
                        <br/>
                        <input type="text" name="tags" value="{{$post->tags}}" class="form-control"/>
                        <br/>
                        <input type="text" name="photo" value="{{$post->photo}}"
                        class="form-control"/>
                        <br/>
                        <input type="submit" value="Save" class="btn btn-block btn-primary"/>
                    </fieldset>
                {!! Form::close() !!}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br/><br/>
@endsection
@section('js')
    <script>
        $('#editor').trumbowyg();
    </script>
@stop